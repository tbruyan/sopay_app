<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use App\Services\Sopay;

class AppSopayController extends AbstractController
{
    private $sopay;
    
    public function __construct(Sopay $sopay)
	{
        $this->session = new Session(new NativeSessionStorage(), new AttributeBag());
        $this->sopay = $sopay;
        $this->token = $this->session->get('token');
        $this->user = $this->session->get('user');
        $this->apikey = $this->session->get('apikey');
        $this->services = $this->session->get('services');
        $this->operations = $this->session->get('operations');
        $this->typeUser = $this->session->get('typeUser');
        $this->email = $this->session->get('email');
        $this->password = $this->session->get('password');
        $this->host = $this->session->get('host');
        $this->uuid = $this->session->get('uuid');
        $this->os = $this->session->get('os');
        $this->browser = $this->session->get('browser');
    }
    
    // not working in other function
    private function testUser(){
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        return true;
    }

    /**
     * @Route("/", name="sopay_home")
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/dashboard", name="sopay_dashboard")
     */
    public function dashboard(Request $request): Response
    {
        //Check if user exist
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        $services = json_decode($this->sopay->getServices());
        $operations = json_decode($this->sopay->getOperations());
        $currencies = json_decode($this->sopay->getCurrency());
        $nbChanges = $this->sopay->getChanges(null, 'SUCCESS', true, $this->token);
        $nbChanges2 = $this->sopay->getChanges(null, 'RECEIVED', true, $this->token);
        $nbProceeds = $this->sopay->getProceeds(null, 'SUCCESS', true, $this->token);
        $nbProceeds2 = $this->sopay->getProceeds(null, 'RECEIVED', true, $this->token);
        $sumSuccessOperation = (int)$nbChanges['1']+(int)$nbChanges2['1']+(int)$nbProceeds['1']+(int)$nbProceeds2['1'];
        if($this->typeUser == 'PROFESSIONAL'){
            $nbBills = $this->sopay->getBill(null, 'SUCCESS', true, $this->apikey);
            $nbBills2 = $this->sopay->getBill(null, 'RECEIVED', true, $this->apikey);
            $sumSuccessOperation = $sumSuccessOperation + (int)$nbBills+ (int)$nbBills2;
        }
        $histories = $this->sopay->getHistory(null, 'month', $this->token);
        $totaldeposit = $this->sopay->getHistory('deposit', null, $this->token);
        $totalWithdraw = $this->sopay->getHistory('withdraw', null, $this->token);
        $totalTransfert = $this->sopay->getHistory('transfert', null, $this->token);
        $totalPurchase = $this->sopay->getHistory('purchase', null, $this->token);
        $lastOperations = json_decode($this->sopay->getHistory('last', null, $this->token));
        //Refresh token to upgrade session token life 
        $refreshToken = json_decode($this->sopay->connect($this->email, $this->password))->token;
        $this->session->set('services', $services);
        $this->session->set('operations', $operations);
        $this->session->set('token', $refreshToken);
        return $this->render('user/index.html.twig', [
            'user' => $this->getUserInfos($this->email, $this->token, $this->host, $this->uuid, $this->os, $this->browser),
            'services' => $services,
            'operations' => $operations,
            'currencies' => $currencies,
            'successOPeration' => $sumSuccessOperation,
            'histories'  => $histories,
            'lastOperations' => $lastOperations,
            'totalPurchase' => $totalPurchase,
            'totalTransfert' => $totalTransfert,
        ]);
    }

    /**
     * @Route("/login", name="sopay_login")
     */
    public function connect(Request $request)
    {
        if($request->isMethod('POST')){
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $uuid = $request->request->get('uuid');
            $os = $request->request->get('os');
            $browser = $request->request->get('br');
            $this->session->clear();
            $currentHost = $request->getClientIp();
            $this->session->set('host', $currentHost);
            $this->session->set('email', $email);
            $this->session->set('password', $password);
            $connect = $this->sopay->connect($email, $password);
            if(is_array($connect)){
                return new JsonResponse(array('success' => false, 'message' => 'Invalid Credential'));
            }
            $token = json_decode($connect)->token;
            $user = $this->getUserInfos($email, $token, $this->host, $uuid, $os, $browser);
            if(isset($user->success) && $user->success == false){
                return new JsonResponse(array('success' => false, 'message' => $user->message));
            }elseif(!$user->matricule){
                return new JsonResponse(array('success' => false, 'message' => 'Check your mailbox to activate your account'));
            } 
            $typeUser = $user->signup_mode;
            if($typeUser == 'PROFESSIONAL'){
                $apikey = json_decode($this->sopay->getApiKey($token));
                $this->session->set('apikey', $apikey);
            }
            $this->session->set('token', $token);
            $this->session->set('user', $user);
            $this->session->set('typeUser', $typeUser);
            $this->session->set('uuid', $uuid);
            $this->session->set('os', $os);
            $this->session->set('browser', $browser);
            return new JsonResponse(array('success' => true, 'message' => 'Login Success', 'data' => 'sopay_dashboard'));
        }
        return $this->render('login.html.twig');
    }

    /**
     * @Route("/logout", name="sopay_logout")
     */
    public function logout()
    {
        $this->session->clear();
        return $this->redirectToRoute('sopay_home');
    }

    /**
     * @Route("/register", name="sopay_register")
     */
    public function register(Request $request): Response
    {
        //if ($request->isXmlHttpRequest()){
        if($request->isMethod('POST')){
            $username = $request->request->get('username');
            $password = $request->request->get('password');
            $email = $request->request->get('email');
            $contact = $request->request->get('contact');
            $typeUser = $request->request->get('type');
            $referer = $request->query->get('r');
            $host = $request->getClientIp();
            $uuid = $request->request->get('uuid');
            $osName = $request->request->get('os');
            $browser = $request->request->get('br');
            $callback = null;
            $fullname = $request->query->get('fullname');
            if(!is_null($referer)){
                $newUser = $this->sopay->createUser($typeUser, $username, $password, $email, $contact, $fullname, $callback, $referer, $uuid, $osName, $browser, $host);
            }else{
                $newUser = $this->sopay->createUser($typeUser, $username, $password, $email, $contact, $fullname, $callback, null, $uuid, $osName, $browser, $host);
            }
            return new JsonResponse(json_decode($newUser));
            
        }
        return $this->render('register.html.twig');
    }

    /**
     * @Route("/profile", name="sopay_profile")
     */
    public function profile(Request $request): Response
    {
        if($request->isMethod('POST')){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
            $matricule = $this->user->matricule;
            $callback = $request->request->get('callback');
            $fullname = $request->request->get('fullname');
            $email = $request->request->get('email');
            $contact = $request->request->get('contact');
            $user = $this->sopay->editUser($matricule, $callback, $fullname, $email, $contact, $this->token);
            return new JsonResponse(json_decode($user));
        }
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        return $this->render('/user/profile.html.twig', [
            'user' => $this->user
            ]);
    }

      /**
     * @Route("/forgot-password", name="sopay_forgot_password")
     */
    public function forgotPass(Request $request): Response
    {
        if($request->isMethod('POST')){
            $email = $request->request->get('email');
            $response = $this->sopay->forgotPassword($email);
            return new JsonResponse(json_decode($response));
        }
        return $this->render('forgot-password.html.twig');
    }

    /**
     * @Route("/reset-password", name="sopay_reset_password")
     */
    public function resetPassword(Request $request): Response
    {
        if($request->isMethod('POST')){    
            $password = $request->request->get('password');
            $token = $request->request->get('token');
            $response = $this->sopay->ressetPassword($token, $password);
            return new JsonResponse(json_decode($response));
        }
        return $this->render('/reset-password.html.twig');
    }

    /**
     * @Route("/update-password", name="sopay_update_password")
     */
    public function updatePassword(): Response
    {
        if($request->isXmlHttpRequest()){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
        $matricule = $this->user->matricule;
        $password = $request->get('password');
        $response = json_decode($this->sopay->updatePassword($matricule, $password, $this->token));
        return new JsonResponse($response);
        }
    }

    /**
     * @Route("/withdraw-rewards", name="sopay_withdraw_rewards")
     */
    public function withdrawRewards(Request $request): Response
    {
        if($request->isMethod('POST')){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
        $amount = $request->request->get('amount');
        $response = json_decode($this->sopay->withdrawRewards($amount, $this->token));
        return new JsonResponse($response);
        }
        return $this->render('/user/withdraw_rewards.html.twig'); 
    }

    /**
     * @Route("/check-user", name="sopay_user")
     */
    public function checkUser(Request $request): Response
    {
        if($request->isXmlHttpRequest()){
            $username = $request->get('username');
            $user = $this->sopay->getUser($username, $this->token);
            $this->session->set('user', $user);
        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
        }
    }

    private function getUserInfos($email, $token, $host, $uuid, $os, $browser){
        if($token == null){
            $user = $this->sopay->getUser($email, $this->token, $this->host, $uuid, $os, $browser);
        }else{
            $user = $this->sopay->getUser($email, $token, $this->host, $uuid, $os, $browser);
        }
        return json_decode($user);
    }

    /**
     * @Route("/changes-currency", name="sopay_change_currency")
     */
    public function currency(Request $request): Response
    {
        if($request->isXmlHttpRequest()){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
        $currency = $request->get('currency');
        $response = json_decode($this->sopay->defaultCurrency($currency, $this->token));
        return new JsonResponse($response);
        }    
    }

    /**
     * @Route("/deposit", name="sopay_deposit")
     */
    public function deposit(Request $request): Response
    {
        if($request->isMethod('POST')){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
            $service = $request->request->get('service');
            $amount = $request->request->get('amount');
            $wallet = $request->request->get('wallet');
            $otp = $request->request->get('otp');
            $payIn = $this->sopay->transact($amount, $wallet, '1', $service, $otp, $this->token);
            return new JsonResponse (json_decode($payIn));
        }
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        //if($request->isXmlHttpRequest()){
            return $this->render('/user/deposit.html.twig');
        //}
    }

    /**
     * @Route("/withdraw", name="sopay_withdraw")
     */
    public function withdraw(Request $request): Response
    {
        if($request->isMethod('POST')){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
            $service = $request->request->get('service');
            $amount = $request->request->get('amount');
            $wallet = $request->request->get('wallet');
            $payOut = $this->sopay->transact($amount, $wallet, '4', $service, null, $this->token);
            return new JsonResponse(json_decode($payOut));
        }
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        return $this->render('/user/withdraw.html.twig');  
    }

    /**
     * @Route("/transfert", name="sopay_transfert")
     */
    public function transfert(Request $request): Response
    {
        if($request->isMethod('POST')){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
            $receiver = $request->request->get('receiver');
            $amount = $request->request->get('amount');
            $transfert = $this->sopay->transfert($amount, $receiver, $this->token);
            return new JsonResponse(json_decode($transfert));
        }
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        $referrals = $this->sopay->getReferral($this->user->matricule, $this->token);
        return $this->render('/user/transfert.html.twig', [
            'user' => $this->user,
            'referrals' => $referrals,
        ]);    
    }

    /**
     * @Route("/changes", name="sopay_changes")
     */
    public function changes(Request $request): Response
    {
        if($request->isMethod('POST')){
            if(is_null($this->user)){
                $state = false;
                $message = 'user not found';
                $response = array('success' => $state , 'message' => $message);
                return $response;
            }
            $inService = $request->request->get('inService');
            $outService = $request->request->get('outService');
            $amount = $request->request->get('inAmount');
            $inWallet = $request->request->get('inWallet');
            $outWallet = $request->request->get('outWallet');
            $otp = $request->request->get('otp');
            $changes = $this->sopay->changes($amount, $inWallet, $outWallet, $inService, $outService, '3', $otp, $this->token);
            return new JsonResponse(json_decode($changes));
        }
        if(is_null($this->user)){
            return $this->redirectToRoute('sopay_login');
        }
        return $this->render('/user/changes.html.twig'); 
    }

    /**
     * @Route("/contact-us", name="sopay_contact")
     */
    public function contact(\Swift_Mailer $mailer, Request $request)
    {
        if($request->isMethod('POST')){   
            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $subject = $request->request->get('subject');
            $message = $request->request->get('message');
            $messageMail = (new \Swift_Message($subject.' from '.$name))->setFrom($email)
                                                                ->setTo('support@soleaspay.com')
                                                                ->setBody($message, 'text/html', 'utf-8')
                                                                ;
            $mailer->send($messageMail);
        
            return new JsonResponse (array('success' => true, 'message' => 'Email sent succesfully'));
        }
        return $this->render('/contact.html.twig');  
    }

    /**
     * @Route("/detail-transaction", name="sopay_detail_transaction")
     */
    public function detailTransaction(Request $request): Response
    {
        if($request->isMethod('POST')){   
            $document = $request->request->get('document');
            $transaction = json_decode($this->sopay->getTransaction($document, $this->token));
            return $this->render('/user/detailTrans.html.twig', array(
                'transaction' => $transaction,
                'user' => $this->user
                ));
        }
    }

    /**
     * @Route("/out-amount", name="sopay_get_amount")
     */
    public function getOutAmount(Request $request): Response
    {
        if($request->isMethod('POST')){   
            $amount = $request->request->get('value');
            $inService = $request->request->get('inService');
            $outService = $request->request->get('outService');
            $outAmount = json_decode($this->sopay->getOutValue($amount, $inService, $outService, $this->token));
            return new JsonResponse ($outAmount);
        }
    }

    /**
     * @Route("/add-new-device", name="sopay_add_device")
     */
    public function newDevise(Request $request): Response
    {
        $uuid = $request->query->get('uuid');
        $token = $request->query->get('token');
        $osName = $request->query->get('os');
        $browser = $request->query->get('br');
        $host = $request->query->get('host');
        $trust = json_decode($this->sopay->addDevise($token, $uuid, $osName, $browser, $host));
        return $this->render('/new_device.html.twig', array('device' => $trust));
                
    }

    /**
     * @Route("/confirm-account", name="sopay_confirm_account")
     */
    public function activeAccount(Request $request): Response
    {
        $token = $request->query->get('token');
        $trust = json_decode($this->sopay->confirmAccount($token));
        return $this->render('/confirm_account.html.twig', array('device' => $trust));
                
    }

    /**
     * @Route("/pm-payment", name="sopay_confirm_pm_payment")
     */
    public function pmPayment(Request $request): Response
    {
        $amount = $request->query->get('amount');
        $ref = $request->query->get('ref');
        return $this->render('/user/pm.html.twig', array('amount' => $amount, 'ref' => $ref ));
                
    }
}
