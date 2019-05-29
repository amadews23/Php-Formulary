<html>
	<title>Ofert for <?php echo ($_POST['name']); ?> (T&T).</title>
	<body>
		<?php 
		$packs = array("Internet at Home and Mobile 6Gb.","Internet at Home and Mobile 12Gb.","Internet at Home, Home Telephone and Mobile 24Gb.","Internet at Home, Mobile Unlimited, Home Telephone and Television.");	
		$mobiles = array(" ","<br>Sampung Little-Basic RAM 1024MB.","<br>Sampung Advanced RAM 6GB.","<br>Sampung SuperPremium RAM 12GB.");
		$pricePacks = array( 12.5, 19.9, 28.5, 39.9);
		$priceMobiles = array(0, 5, 8.5, 10.9);
		$priceRouter = 6;
		$freeRouter = False;
		$payRouter = False;
		$priceTotal = $pricePacks[$_POST['pack']] + $priceMobiles[$_POST['mobilePhone']];
		if ($_POST['pack'] == 3) { //If you select pack 3 the router its free for you
			$freeRouter = True;
		}

		?>
    		<h1>Ofert for Mr./Ms. <?php echo ($_POST['name']); ?></h1>
		<h2>You have selected:</h2>
		<b><?php echo ($packs[$_POST['pack']]); ?></b>
		<b><?php
			if (isset($_POST['homeRouter']) && $freeRouter == False) {
    				echo "<br>Router Wifi NextYear.";
				$priceTotal = $priceTotal + $priceRouter; //Add price of router
				$payRouter = True;
			}
			if ($freeRouter == True) {
				echo "<br>Gift for you: Router Wifi NextYear.";
			}		
		?></b>
		<b><?php echo($mobiles[$_POST['mobilePhone']]); ?></b>
		<br>
		<h2>Your price/month:</h2>
		<b>Pack: <?php echo($pricePacks[$_POST['pack']])." Euros."; ?></b>
		<b><?php 
			if ($payRouter == True) {
    				echo "<br>Router: 6 Euros.";
			}
			if ($freeRouter == True)	{
				echo "<br>Router: Free.";
			}		
		?></b>
		<br>
		<b>Mobile: <?php echo($priceMobiles[$_POST['mobilePhone']])." Euros. ";	?></b>
		<h2>Total: <?php echo($priceTotal) . " Euros"; ?></h2>
		<br>
		<a href="index.php">Go back</a>
	</body>
</html>
