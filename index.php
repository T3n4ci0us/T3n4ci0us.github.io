<?php
session_start();

date_default_timezone_set('America/New_York');
$today = date('l F jS Y');
$visitorIp = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Tenacious is a mostly positive term. If someone calls you tenacious you're probably the kind of person who never gives up and never stops trying; someone who does whatever is required to accomplish a goal. In our efforts to learn the craft of Ethical Hacking, we are T3n4ci0us!" />
        <meta name="author" content="`En Passant" />
		<title>T3n4ci0us - <?php echo $today?></title>
		<link rel="icon" type="image/png" href="Guy-Fawkes.png" />	
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/cts.css">
		<script src="js/flag.js"></script>
<style>
#bottom{
	width: 100%;
	position: fixed;
	bottom: 7px;
	text-align: center;
}
.cts {
	color: #C0C0C0;
	font-weight: bold;
	font-family: serif;
	font-size: 12pt;
	text-decoration: none;
}
.cts:hover {
	color: #808080;
}
</style>
</head>
<body onLoad="typeWriter()">
<div class="hero-image">
  <div class="hero-text">
	<a href="https://robsnest.net/T3n4ci0us" border="0" title="Your IP Address is <?php echo $_SERVER['REMOTE_ADDR']?>"><img src="Kali-Dragon.png" /></a>
  </div>
</div>
<div class="rc_nav" id="centered_nav">
<a href="cve-2021-4034.php" title="cve-2021-4034.c">cve-2021-4034.c</a>
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="navChange()">&#9776;</a>
</div>
<div class="rc_content">
	<div class="typeArea"><p id="typearea"></p></div>

	<div id="phoneDiv">
	We Are T3n4ci0us!
	<br /><br />
	<img src="T3n4ci0us-HT-200x200.png" />
	</div>
</div>
<script>
var i = 0;
var speed = 50;
var txt = 'Tenacious is a mostly positive term. If someone calls you tenacious you\'re probably the kind of person who never gives up and never stops trying; someone who does whatever is required to accomplish a goal. In our efforts to learn the craft of Ethical Hacking.';
function typeWriter() {
  if (i < txt.length) {
    phone = 'no';
    document.getElementById("typearea").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }else{
    phone = 'yes';
  }
  if(phone === 'yes'){
	showPhone();
  }
}
</script>

<div id="bottom">
<a href="https://robsnest.net" class="cts" title="RobsNest">`En Passant</a><br /><br />
</div>
</body>
</html>

