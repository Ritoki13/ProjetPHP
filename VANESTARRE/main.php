<?php
	include 'functions.php';
	session_start();
	
	start_page('S\'inscrire');
	echo '<form action="data-processing.php" method="post">
			E-mail<br/><input type="text" name="email"/><br/>
			Identifiant<br/><input type="text" name="identifiant"/><br/>
			Mot de passe<br/><input type="password" name="motdepasse"/><br/>
			Vérification du mot de passe<br/><input type="password" name="motdepasse2"/><br/>
			<input type="submit" name="action" value="mailer"/><br/>
		  </form>';
	if($_SESSION['error']=='erreurPassword')
	{
		echo $_SESSION['error'] . PHP_EOL;
		echo '<p style="color:red;">Veuillez vérifier que les mots de passe sont identiques!</p>';
	}
	if($_SESSION['error']=='erreurEmpty')
	{
		echo $_SESSION['error'] . PHP_EOL;
		echo '<p style="color:red;">Tous les champs sont obligatoires</p>';
	}
	if($_SESSION['error']=='erreurMailDouble')
	{
		echo $_SESSION['error'] . PHP_EOL;
		echo '<p style="color:red;">L\'adresse mail renseignée est déjà utilisée</p>';
	}
	if($_SESSION['error']=='erreurLoginDouble')
	{
		echo $_SESSION['error'] . PHP_EOL;
		echo '<p style="color:red;">L\'identifiant utilisé est déjà pris</p>';
	}
	unset($_SESSION['error']);

	end_page();
?>