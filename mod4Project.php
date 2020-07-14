<html>
		<head>
	<title>What time is it?</title>
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
<h1 style="color:DodgerBlue;">What time is it?</h1>
	</div>
				<div data-role="content">

<?php
	date_default_timezone_set("America/Chicago");
	$time = date("H:i:sa");
	echo "<br/><br/>";
	echo "<b>The current time in your time zone is: </b>" . date("<b>H:i:sa</b>");

	if ($time < "12") {
		echo "<br/><br/>";
    echo "<br>Good morning!";
	} elseif ($time < "17") {
			echo "<br/><br/>";
      echo "<br>Good afternoon!";
  		} else {
	  		echo "<br/><br/>";
      	echo "<br>Have a good night.";
	}
	if ($time < 10) {
		echo "<br/><br/>";
		echo "<br>It's too early for me.";
 	}
	if ($time < "20") {
			echo "<br/><br/>";
			echo "<br>The animals should be let out.";
			} else {
				echo "<br/><br/>";
				echo "<br>The animals should be put in the barn.";
	}
	if ($time < "18") {
			echo "<br/><br/>";
	    echo "<br>There's still time to go swimming!";
		 	} else {
			 echo "<br/><br/>";
	     echo "<br>It's too late to go swimming.";
  }
	if ($time > "20") {
			echo "<br/><br/>";
      echo "<br>Time for bed, kids.";
  }
	if ($time < "12") {
		echo "<br/><br/>";
		echo "<br>It's going to be a great day!";
	} elseif ($time < "18") {
			echo "<br/><br/>";
			echo "<br>Have a nice day!";
			} else {
					echo "<br/><br/>";
					echo "<br>It's been a lovely day.";
	 }
?>

	</div>


				<div data-role="footer" data-theme="b">
	  <h4 style="color:DodgerBlue;">TIME TRACKER APP &copy; 2018</h4>
	</div>
	</body>
</html>
