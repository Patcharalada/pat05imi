<body onload="JavaScript:timedRefresh(15000);"> 
<h1>Patcharalada Thongkleang</h1>
<h2>Humidity</h2>
<iframe src = https://thingspeak.com/channels/1458422/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="border:none"; height="300px" width="500px"></iframe>
<h2>Temperature</h2>
<iframe src = https://thingspeak.com/channels/1458422/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="border:none"; height="300px" width="500px"></iframe>
<h2>Map</h2>
<iframe src = https://thingspeak.com/channels/1458422/maps/channel_show  style="border:none"; height="300px" width="500px"></iframe>

<html>
<head>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod)
{
    setTimeout("location.reload(true);",timeoutPeriod);
}
    <meta http-equiv="refresh" content="15; url="<?php echo $_SERVER['PHP_SELF']; ?>">
</script>
</head>
  
<body onload="JavaScript:timedRefresh(15000);">

<?php
   $Temp = file_get_contents('https://api.thingspeak.com/channels/1458422/fields/1/last.txt');
   $Hum = file_get_contents('https://api.thingspeak.com/channels/1458422/fields/2/last.txt');
    
 echo "<br> temperature is = ".$temp"</br>";
 echo "humidity is = ".$hum;
?>

</body>
</html>
