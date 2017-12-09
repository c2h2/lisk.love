
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
        <th>Price USDT</th>
        <th>24HR Vol</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bittrex</td>
        <td id="bitx1">Loading...</td>
        <td id="bitx2">Loading...</td>
        <td id="bitx3">Loading...</td>
        <td id='bitx4'>Loading...</td>
      </tr>
      <tr>
        <td>Poloniex</td>
        <td id="polo1">Loading...</td>
        <td id="polo2">Loading...</td>
        <td id="polo3">Loading...</td>
        <td id="polo4">Loading...</td>
      </tr>
      </tr>
      <tr>
        <td>Binance</td>
        <td id='bina1'>Loading...</td>
        <td id='bina2'>Loading...</td>
        <td id='bina3'>Loading...</td>
        <td id='bina4'>Loading...</td>
      </tr>
      <tr>
        <td>Yobit</td>
        <td id='a1'></td>
        <td id='a2'></td>
        <td id='a3'></td>
        <td></td>
      </tr>

    </tbody>
          </div>

  <table class="table">
    <thead>
      <tr>
        <th>Exchange</th>
        <th>BTC </th>
        <th>ETH </th>
        <th>ETH/BTC </th>
        <th>BCH </th>
        <th>BCH/BTC </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bittrex</td>
        <td id="bitx_a1">Loading...</td>
        <td id="bitx_a2">Loading...</td>
        <td id="bitx_a3">Loading...</td>
        <td id="bitx_a4">-</td>
        <td id="bitx_a5">-</td>
      </tr>
      <tr>
        <td>Poloniex</td>
        <td id="polo_a1">Loading...</td>
        <td id="polo_a2">Loading...</td>
        <td id="polo_a3">Loading...</td>
        <td id="polo_a4">-</td>
        <td id="polo_a5">-</td>
      </tr>
      <tr>
        <td>Binance</td>
        <td id="bina_a1">Loading...</td>
        <td id="bina_a2">Loading...</td>
        <td id="bina_a3">Loading...</td>
        <td id="bina_a4">-</td>
        <td id="bina_a5">-</td>
      </tr>
      <tr>
        <td>acx.io</td>
        <td id="acxi_a1">Loading...</td>
        <td id="acxi_a2">Loading...</td>
        <td id="acxi_a3">-</td>
        <td id="acxi_a4">Loading...</td>
        <td id="acxi_a5">-</td>
      </tr>
      <tr>
        <td>forex rate</td>
        <td id="aud1"></td>
        <td id="aud2"></td>
        <td id="aud3"></td>
        <td id="aud4"></td>
        <td id="aud5"></td>
      </tr>


    </tbody>

          <div class="mastfoot">
            <div class="inner">
              <p>Sponsored by <a href="https://umine.io">umine.io</a>, mining cryptocurrencies on any PC/Mac.</p>
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
      $('#polo3').text('$'+($('#polo1').text() * $('#polo2').text()).toFixed(3));
      $('#bina3').text('$'+($('#bina1').text() * $('#bina2').text()).toFixed(3));

      $('#bitx_a3').text(($('#bitx_a2').text() / $('#bitx_a1').text()).toFixed(8));
      $('#polo_a3').text(($('#polo_a2').text() / $('#polo_a1').text()).toFixed(8));
      $('#bina_a3').text(($('#bina_a2').text() / $('#bina_a1').text()).toFixed(8));
      $('#acxi_a3').text(($('#acxi_a2').text() / $('#acxi_a1').text()).toFixed(8));


      $('#polo_a5').text(($('#polo_a4').text() / $('#polo_a1').text()).toFixed(8));
      $('#acxi_a5').text(($('#acxi_a4').text() / $('#acxi_a1').text()).toFixed(8));

      $('#aud1').text(($('#bitx_a1').text() / $('#acxi_a1').text()).toFixed(3));
      $('#aud2').text(($('#bitx_a2').text() / $('#acxi_a2').text()).toFixed(3));
      $('#aud4').text(($('#polo_a4').text() / $('#acxi_a4').text()).toFixed(3));

  }

  function fetch_mkt(){
    $.get("prices_json.txt", function(mkt_json){
      var obj = jQuery.parseJSON(mkt_json );
        
      //$("#b1").text(mkt);
      $("#bitx1").text(obj["bitx"]['btc_lsk']['result'][0]['Last'].toFixed(8));
      $("#polo1").text(parseFloat(obj["polo"]['BTC_LSK']['last']).toFixed(8));
      $("#bina1").text(parseFloat(obj["bina"]['LSKBTC']).toFixed(8));

      $("#bitx2").text(obj["bitx"]['btc_usdt']['result'][0]['Last'].toFixed(2));
      $("#polo2").text(parseFloat(obj["polo"]['USDT_BTC']['last']).toFixed(2));
      $("#bina2").text(parseFloat(obj["bina"]['BTCUSDT']).toFixed(2));

      $("#bitx4").text(obj["bitx"]['btc_lsk']['result'][0]['Volume'].toFixed(0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
      $("#polo4").text(parseFloat(obj["polo"]['BTC_LSK']['quoteVolume']).toFixed(0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
      $("#bina4").text(parseFloat(obj["bina"]['LSKBTC_VOL']['volume']).toFixed(0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

      $("#bitx_a1").text(obj["bitx"]['btc_usdt']['result'][0]['Last'].toFixed(2));
      $("#polo_a1").text(parseFloat(obj["polo"]['USDT_BTC']['last']).toFixed(2));
      $("#bina_a1").text(parseFloat(obj["bina"]['BTCUSDT']).toFixed(2));
      $("#acxi_a1").text(parseFloat(obj["acxi"]['btcaud']['ticker']['last']).toFixed(2));

      $("#bitx_a2").text(obj["bitx"]['eth_usdt']['result'][0]['Last'].toFixed(2));
      $("#polo_a2").text(parseFloat(obj["polo"]['USDT_ETH']['last']).toFixed(2));
      $("#bina_a2").text(parseFloat(obj["bina"]['ETHUSDT']).toFixed(2));
      $("#acxi_a2").text(parseFloat(obj["acxi"]['ethaud']['ticker']['last']).toFixed(2));

      //$("#bitx_a4").text(obj["bitx"]['bch_usdt']['result'][0]['Last'].toFixed(2));
      $("#polo_a4").text(parseFloat(obj["polo"]['USDT_BCH']['last']).toFixed(2));
      //$("#bina_a4").text(parseFloat(obj["bina"]['BCHUSDT']).toFixed(2));
      $("#acxi_a4").text(parseFloat(obj["acxi"]['bchaud']['ticker']['last']).toFixed(2));



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

