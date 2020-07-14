<html>
		<head>
	<title>Is it a palindrome?</title>
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
<h1 style="color:DodgerBlue;">Is it a palindrome?</h1>
	</div>
				<div data-role="content">

<?php

function stringreversal($string) {
	$length = strlen($string);

	for ($i=1; $i<=$length; $i++) {
		$stringreversed = $stringreversed . substr($string,$length-$i,1);
			}
			palindrome($string, $stringreversed);
		}

	function palindrome($string, $stringreversed) {
		if ($string === $stringreversed) {
			echo $string . "  -  " . $stringreversed . "  -  This is a palindrome!<br/><br/>";
		} else {
				echo $string . "  -  " . $stringreversed . "  -  This is not a palindrome!<br/><br/>";
				}
}

	stringreversal(NUN);
	stringreversal(POP);
	stringreversal(MUG);
	stringreversal(TOOL);
	stringreversal(PAN);
	stringreversal(PANS);
	stringreversal(TOOT);
	stringreversal(WOW);
	stringreversal(RAIL);
	stringreversal(PINS);

?>

	</div>
				<div data-role="footer" data-theme="b">
	  <h4 style="color:DodgerBlue;">REVERSIBLE WORDS &copy; 2018</h4>
	</div>
	</body>
</html>
