<html>
<head>
<title>Lisk Lovers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
</head>
<style>
#chart-container {
  width: 100%;
  height: 800px;
}

#main {
  color: #fff;	
  font-family: Arial, Helvetica, sans-serif;
}

body{
	background-color:black;
}

</style>
<body>
<div id="main">
<h1>Lisk Lovers&nbsp;<img src="Love_Heart_SVG.svg" height="24" width="24"></img></h1>
<p>Lisk Prices, $LSK, 3 exchange price comparison (Poloniex, Bittrex and Jubi), still under construction.</p>
<pre id="result">Loading ...</pre>
<pre id="spacing">
</pre>
<div id="chart-container"></div>


<pre>
Please donate any amount of lisk to pay servers and make the site better: 8178640673083794057L
Contact: lisk.lover@gmail.com, https://www.reddit.com/user/c2h2pro
</div>
</pre>
<script type="text/javascript" src="https://static.cryptowat.ch/assets/scripts/embed.bundle.js"></script>
<script type="text/javascript">
$(function(){

	function fetch_result(){
		$.get("http://lisk.love/prices.txt", function(data){
		        $("#result").text(data);
		});
	}

        setInterval(fetch_result, 3000);
	fetch_result();
});
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105310038-1', 'auto');
  ga('send', 'pageview');

  var chart = new cryptowatch.Embed('poloniex', 'lskbtc', {
    timePeriod: '5m',
    customColorScheme: {
    bg:           "111111",
    text:         "b2b2b2",
    textStrong:   "e5e5e5",
    textWeak:     "7f7f7f",
    short:        "FD2100",
    shortFill:    "FF672C",
    long:         "00FF00",
    longFill:     "002700",
    cta:          "363D52",
    ctaHighlight: "414A67",
    alert:        "FFD506",
	}
});
chart.mount('#chart-container');
</script>
</body>
</html>
