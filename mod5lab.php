<html>
		<head>
	<title>Frequent Shopper Bonus App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1 style="color:DodgerBlue;">Frequent Shopper Bonus App</h1>
	</div>
				<div data-role="content">

					<?php
					/*This app will track and display the number of times a customer has
					shopped and how many more times until they recieve their frequent shopper bonus*/
					$timesShopped = 1;
					$timeToBonus = 9;

					while ($timesShopped <= 10) {
						if ($timeToBonus > 0) {
					    echo "You have shopped at Super Stores " . $timesShopped++ . " times! Only " . $timeToBonus-- . " trips left until you recieve your $20 frequent shopper bonus coupon!" . "<br/>";
					}	else {
						echo "You have shopped at Super Stores " . $timesShopped++ . " times! Congratulations!!! You have earned a $20 frequent shopper bonus coupon!!!";
					}
				}

					?>

	</div>
				<div data-role="footer" data-theme="b">
	  <h4 style="color:DodgerBlue;">FREQUENT SHOPPER BONUS APP &copy; 2018</h4>
	</div>
	</body>
</html>
