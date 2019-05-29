<html>
	<title>Tolo Telecom (T&T)</title>
	<body>
		<h1>Welcome to Tolo Telecom (T&T).</h1>
		<h2>We have a special offer for you.</h2>
		<h3>Please, fill in the fields to customize the offer:</h3>
		<form method="POST" action="result.php">
			<b>Name:</b>
			<textarea name="name" rows=1></textarea>
			<br>
			<br>
			<b>My pack:</b>
			<select name="pack">
				<option value="0">Internet at home+Mobile 6Gb</option>
				<option value="1">Internet at home+Mobile 12Gb</option>
				<option value="2">Internet at home+Mobile 24Gb +Home Telephone</option>
				<option value="3">Internet at home+Mobile Unlimited +Home Telephone+ TV</option>
			</select>
			<br>
			<br>
			<b>I need a ADSL router at home:</b>
			<input name="homeRouter" type="checkbox">
			<br>
			<br>
			<b>I want a mobile phone:</b>
            		<br>
            		<input name="mobilePhone" type="radio" value="1">Sampung Little-Basic
            		<input name="mobilePhone" type="radio" value="2">Sampung Advanced
            		<input name="mobilePhone" type="radio" value="3">Sampung SuperPremium
			<input name="mobilePhone" type="radio" value="0" checked>I already have a mobile
            		<br>
			<br>
                	<input type="submit" name="submit" value="Calculate"/>
		</form>
	</body>
</html>
