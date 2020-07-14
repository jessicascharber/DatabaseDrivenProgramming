<html>
		<head>
	<title>Average Price Per Person</title>
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
<h1 style="color:DodgerBlue;">Average Price Per Person - </h1>
	</div>
				<div data-role="content">

          <?php
          /* This program calculates the average money spent per person, per table, at a restaurant. */
          function averageprice($peopletable, $totalbill) {
              $average = $totalbill / $peopletable;
							echo "<br/><br/>";
              echo "<b>Number of people at table - <b>" . $peopletable . ", " . "<b>  Total bill - <b>" . $totalbill . "<br/>";
							echo "<b>The average per person is - <b>" . $average . "<br/>";
						}

					averageprice(5, 56.76);
          averageprice(7, 279.44);
          averageprice(1, 23.49);
          averageprice(3, 27.79);
          averageprice(7, 193.89);
          averageprice(9, 219.33);
					averageprice(5, 355.45);

          function totalaverage($totalspent, $totalpeople) {
            $totalaverage = ($totalspent / $totalpeople);
          return $totalaverage;
          }
          echo "<br/><br/>";
          echo "The average amount of money spent per person from the total of tables is - ";
          echo totalaverage(1156.15, 37) . "<br/>";


          ?>

	</div>
				<div data-role="footer" data-theme="b">
	  <h4 style="color:DodgerBlue;">CALCULATE THE AVERAGE &copy; 2018</h4>
	</div>
	</body>
</html>
