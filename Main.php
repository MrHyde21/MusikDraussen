<?php require_once("scripts/DBconnect.php");
if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
		$connected=true;
		$username=$_SESSION['username'];
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="jp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		<link rel="icon" href="images/icon.png"/>
		
		<link rel="stylesheet" href="styles/layout.css"/>
		<link rel="stylesheet" href="styles/main.css"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>
		
		<title>Home</title>
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
					header('Location: Main.php?Lang=EN');
				}
			
			} else{
					header('Location: Main.php?Lang=EN');      
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
					header('Location: Main.php?Lang=EN');
				}
			
			}else{
					header('Location: Main.php?Lang=EN');      
				}
				
			?>
				
				<!--<div style="width:100%;height:220px;color:#000;border-top:1px solid green;">
					<iframe height="190" frameborder="0" width="100%" scrolling="no" src="http://www.prevision-meteo.ch/services/html/geneve/square" allowtransparency="true">
					</iframe>
					<a style="text-decoration:none;font-size:0.75em;" title="Toute la m�t�o de Gen�ve" href="http://www.prevision-meteo.ch/meteo/localite/geneve">Toute la météo de Genève
					</a>
				</div>-->
			</div>
			
			<article>
			<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'EN/Main_EN.php';
				}
				elseif($lang=='DE'){
					include 'DE/Main_DE.php';
				}
				elseif($lang=='JP'){
					include 'JP/Main_JP.php';
				}
				else{
					header('Location: Main.php?Lang=EN');
				}
			
			} else{
					header('Location: Main.php?Lang=EN');      
				}
			?>
			
			</article>
		</div>
		
		<footer>
		<p>&copy; Chadi Aebi 2016</p>
		</footer>
		
		
	</body>
</html>