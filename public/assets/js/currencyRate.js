<script>
    $(document).ready(function(){
    //contact convert api for cureency rate
        $.ajax({
           url: "https://soleaspay.com/convert",
           type: "GET",
           dataType: "JSON",
           data: {amount: 1,
                  devise: 'XAF',
                  out: 'ALL'},
           success:function(data)
            {
              $('#xaf_eur').text(data.data.EUR);
              $('#xaf_usd').text(data.data.USD);
              $('#xaf_xpi').text(data.data.XPI);
              $('#xaf_btc').text(data.data.BTC);
            }
        })
        $.ajax({
          url: "https://soleaspay.com/convert",
          type: "GET",
          dataType: "JSON",
          data: {amount: 1,
                 devise: 'USD',
                 out: 'ALL'},
          success:function(data)
           {
             $('#usd_eur').text(data.data.EUR);
             $('#usd_xaf').text(data.data.XAF);
             $('#usd_xpi').text(data.data.XPI);
             $('#usd_btc').text(data.data.BTC);
           }
       });
       $.ajax({
        url: "https://soleaspay.com/convert",
        type: "GET",
        dataType: "JSON",
        data: {amount: 1,
               devise: 'EUR',
               out: 'ALL'},
        success:function(data)
         {
           $('#eur_usd').text(data.data.USD);
           $('#eur_xaf').text(data.data.XAF);
           $('#eur_xpi').text(data.data.XPI);
           $('#eur_btc').text(data.data.BTC);
         }
     });
     $.ajax({
      url: "https://soleaspay.com/convert",
      type: "GET",
      dataType: "JSON",
      data: {amount: 1,
             devise: 'BTC',
             out: 'ALL'},
      success:function(data)
       {
         $('#btc_eur').text(data.data.EUR);
         $('#btc_xaf').text(data.data.XAF);
         $('#btc_xpi').text(data.data.XPI);
         $('#btc_usd').text(data.data.USD);
       }
   });
   $.ajax({
    url: "https://soleaspay.com/convert",
    type: "GET",
    dataType: "JSON",
    data: {amount: 1,
           devise: 'XPI'},
    success:function(data)
     {
       $('#xpi_eur').text(data.data.EUR);
       $('#xpi_xaf').text(data.data.XAF);
       $('#xpi_usd').text(data.data.USD);
       $('#xpi_btc').text(data.data.BTC);
     }
 });
});
</script>
