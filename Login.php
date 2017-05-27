<?php require_once("scripts/DBconnect.php");
session_start();
if(isset($_POST['username'])){
	$matchUser=false;
	
	$usernamePost=$_POST['username'];
	$passPost=$_POST['password'];
	try{
		$listUsers= $DB->query("SELECT * FROM users WHERE nameUsers='$usernamePost'");
		$listUsers->setFetchMode(PDO::FETCH_OBJ);
		
		if($listUser=$listUsers->fetch()){
			$matchUser=true;
			$matchPass=false;
			if(md5($passPost)==$listUser->passwordUsers){
				$matchPass=true;
				$_SESSION['username']=$usernamePost;
				$_SESSION['idUser']=$listUser->idUsers;
				$_SESSION['usrRole']=$listUser->Roles_idRoles;
				header('Location:Main.php?Lang=EN');
			}
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
		<link rel="stylesheet" href="styles/layout.css"/>
		<link rel="stylesheet" href="styles/login.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>
		<title>Login</title>
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
					header('Location:Login.php?Lang=EN');
				}
			
			} else{
					header('Location:Login.php?Lang=EN');      
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
					header('Location:Login.php?Lang=EN');
				}
			
			} else{
					header('Location:Login.php?Lang=EN');      
				}
			?>
				
				
			</div>
			
			<article>
			<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'EN/Login_EN.php';
				}
				elseif($lang=='DE'){
					include 'DE/Login_DE.php';
				}
				elseif($lang=='JP'){
					include 'JP/Login_JP.php';
				}
				else{
					header('Location:Login.php?Lang=EN');
				}
			
			} else{
					header('Location:Login.php?Lang=EN');      
				}
			?>
			
			
			</article>
		</div>
		
		<footer>
		<p>&copy; Chadi Aebi 2016</p>
		</footer>
		
		
	</body>
</html>