<?php require_once("scripts/DBconnect.php");
if(!isset($_SESSION)){
		session_start();
	}
	
if(isset($_POST['username'])&&isset($_POST['mail'])&&isset($_POST['password'])&&isset($_POST['password2'])){
	$usermatch=false;
	$mailmatch=false;
	$usernamePost=$_POST['username'];
	$mailPost=$_POST['mail'];
	$passwordPost=md5($_POST['password']);
	$passwordConfirm=md5($_POST['password2']);
	
	if($passwordPost==$passwordConfirm){$passConfirm=true;
	}else{$passConfirm=false;}
	try{
		$listUsers= $DB->query("SELECT * FROM users WHERE 1");
		$listUsers->setFetchMode(PDO::FETCH_OBJ);

		while($listUser = $listUsers->fetch()){
			
			$username=$listUser->nameUsers;
			$mail=$listUser->mailUsers;
			
			if($usernamePost==$username){
				$usermatch=true;
			}
			if($mailPost==$mail){
				$mailmatch=true;
			}
		}
		if(!$usermatch&&!$mailmatch&&$passConfirm){
			$DB->exec("INSERT INTO users (idUsers,nameUsers,passwordUsers,mailUsers,Roles_idRoles) VALUES(NULL,'$usernamePost','$passwordPost','$mailPost','2')");
			$registered=true;
			header("Location:Login.php?Lang=".$_GET['Lang']);
		}
	}
	catch (PDOException $e){
		echo $e->getMessage();
		die();
	}
}
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="jp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		<link rel="icon" href="images/icon.png"/>
		
		<link rel="stylesheet" href="styles/layout.css"/>
		<link rel="stylesheet" href="styles/login.css"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>
		
		<title>Register</title>
		
	</head>
	<body>
		
		<header>
		<div class="topright">
			<?php 
			include 'Top.php';
			?>
		</div>
		<h1>Musik Draußen</h1>
		
		</header>
		
		
		
		<nav>
			<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'Nav_EN.php';
				}
				elseif($lang=='DE'){
					include 'Nav_DE.php';
				}
				elseif($lang=='JP'){
					include 'Nav_JP.php';
				}
				else{
					header('Location:Register.php?Lang=EN');
				}
			
			} else{
					header('Location:Register.php?Lang=EN');      
				}
			?>
		</nav>
		
		<div class="main">
			<div class="menu">
				<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'Nav_EN.php';
				}
				elseif($lang=='DE'){
					include 'Nav_DE.php';
				}
				elseif($lang=='JP'){
					include 'Nav_JP.php';
				}
				else{
					header('Location:Register.php?Lang=EN');
				}
			
			} else{
					header('Location:Register.php?Lang=EN');      
				}
			?>
				
			</div>
			
			<article>
			<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'EN/Register_EN.php';
				}
				elseif($lang=='DE'){
					include 'DE/Register_DE.php';
				}
				elseif($lang=='JP'){
					include 'JP/Register_JP.php';
				}
				else{
					header('Location:Register.php?Lang=EN');
				}
			
			} else{
					header('Location:Register.php?Lang=EN');      
				}
				
			
			?>
			
			
			</article>
		</div>
		
		<footer>
		<p>&copy; Chadi Aebi 2016</p>
		</footer>
		
		
	</body>
</html>