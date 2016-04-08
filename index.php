<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"]=0;
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Ninja Gold Game" />
	<title>Ninja Gold Game</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="container">
		<header>
			<h1>Broke Ass Ninja</h1>
		</header>
		<div id="top_bar">
			<h2>Your Gold:</h2>
			<p id="counter">
			<?php 
				echo $_SESSION["count"];
			?></p>
			<p id="restart">File for Bankruptcy :(</p>
			<form action="process.php" method="post">
				<input type="hidden" name="restart" value="restart" />
				<input type="submit" value="Start Over" />
			</form>
		</div>
		<div id="main_row">
			<div class="moneymaker">
				<h3>Farm</h3>
				<h4>(earns 10-20 gold)</h4>
				<form action="process.php" method="post">
					<input type="hidden" name="building" value="farm" />
					<input type="submit" value="Find Gold!" />
				</form>
			</div>
			<div class="moneymaker">
				<h3>Cave</h3>
				<h4>(earns 5-10 gold)</h4>
				<form action="process.php" method="post">
					<input type="hidden" name="rock" value="cave" />
					<input type="submit" value="Find Gold!" />
				</form>
			</div>
			<div class="moneymaker">
				<h3>House</h3>
				<h4>(earns 2-5 gold)</h4>
				<form action="process.php" method="post">
					<input type="hidden" name="lumber" value="house" />
					<input type="submit" value="Find Gold!" />
				</form>
			</div>
			<div class="moneymaker">
				<h3>Casino!</h3>
				<h4>(win/lose 0-50 gold)</h4>
				<form action="process.php" method="post">
					<input type="hidden" name="vegas" value="casino" />
					<input type="submit" value="Give Away Gold!" />
				</form>
			</div>
		</div>
		<div id="low_bar">
			<h5>Activities</h5>
			<div id="log">
				<?php
					if(!empty($_SESSION["log"])){ 
						foreach(array_reverse($_SESSION["log"]) as $value) {
						echo $value;
						}
					} 
				?>
			</div>
		</div>
	</div>
</body>
</html>