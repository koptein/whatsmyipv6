<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Whats my IPv6 Address?</title>
    </head>
    <body>
    <div class="header">
        <h1> What Protocol are you using? </h1>
    </div><br>
    <div class="main">
        <p>
        You are using 
        <?php 
        if (strstr($_SERVER['REMOTE_ADDR'], '.')) {
            echo "<span class='red'>IPV4 ! </span><br>";
            $arr= preg_split('/:/', $_SERVER['REMOTE_ADDR'], -1);
            echo "Your IPv4 Address is: <b>" . $arr[sizeof($arr)-1]. '</b>';
        }
        else {
            echo "<span class='green'>IPV6 !</span> <br>";
            echo "Your IPv6 Address is: <b>" . $_SERVER['REMOTE_ADDR']. '</b>';
            }
        ?> 
        </p>
        <p>
            Learn more about IPv6 at <a href="http://en.wikipedia.org/wiki/IPv6" target="_blank">Wikipedia</a>
        </p>
        <p>
            You may use this sites backend in your automated scripts or in
            your own programs. Please use the <a
            href="backend.php">backend</a> for this purpose. It will deliver
            a JSON-Encoded String in the following format:
            {"protocol":"IPv4/IPv6", "address":"[Your IPv4/IPv6 address]"} .
        </p>
        <p>
        You may visit my <a href="http://www.koptein.de"
        target="blank">website</a>, follow me on <a
        href="http://twitter.com/koptein"
        target="blank">twitter</a>, be my friend on <a
        href="http://facebook.com/koptein"
        target="_blank">facebook</a> or contact me via Jabber
        (koptein@jabber.unixgroup.de) in order to buy me a beer.
        </p>
        </div>
        <div class='footer'>
            Made by <a href="http://www.koptein.de">Christian Koptein</a>  
        </div>
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.whatsmyipv6.org/" : "http://piwik.whatsmyipv6.org/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
    piwikTracker.trackPageView();
    piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.whatsmyipv6.org/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
     </body>
</html>

