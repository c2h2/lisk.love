
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Lisk.Love</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Lisk.Love</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Links</a>
                <a class="nav-link" href="#">Contact</a>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Lisk Prices</h1>
            <table class="table">
    <thead>
      <tr>
        <th>Exchange</th>
        <th>Last LSK_BTC </th>
        <th>Last BTC_USDT </th>
        <th>Calculated Price USD</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bittrex</td>
        <td id="bitx1">Loading...</td>
        <td id="bitx2">Loading...</td>
        <td id="bitx3">Loading...</td>
      </tr>
      <tr>
        <td>Poloniex</td>
        <td id="polo1">Loading...</td>
        <td id="polo2">Loading...</td>
        <td></td>
      </tr>
      </tr>
      <tr>
        <td>Binance</td>
        <td id='bina1'>Loading...</td>
        <td id='bina2'>Loading...</td>
        <td></td>
      </tr>
    </tbody>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Sponsored by <a href="http://umine.io">umine.io</a>, mining cryptocurrencies on any PC/Mac.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the e;d of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>

$(function(){

  function calculate(e){
      $('#bitx3').text('$'+($('#bitx1').text() * $('#bitx2').text()).toFixed(3));
  }

  function fetch_mkt(){
    $.get("prices_json.txt", function(mkt_json){
      var obj = jQuery.parseJSON(mkt_json );
      console.log(obj);
        
      //$("#b1").text(mkt);
      $("#bitx1").text(obj["bitx"]['btc_lsk']['result'][0]['Last'].toFixed(8));
      $("#polo1").text(parseFloat(obj["polo"]['BTC_LSK']['last']).toFixed(8));
      $("#bina1").text(parseFloat(obj["bina"]['LSKBTC']).toFixed(8));

      $("#bitx2").text(obj["bitx"]['btc_usdt']['result'][0]['Last'].toFixed(2));
      $("#polo2").text(parseFloat(obj["polo"]['USDT_BTC']['last']).toFixed(2));
      $("#bina2").text(parseFloat(obj["bina"]['BTCUSDT']).toFixed(2));

      calculate();

    });
  }

  setInterval(fetch_mkt, 2000);
  fetch_mkt();
});
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105310038-1', 'auto');
  ga('send', 'pageview');


    </script>
  </body>
</html>

