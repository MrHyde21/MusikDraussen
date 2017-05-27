<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="jp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		<link rel="icon" href="images/icon.png"/>
		
		<link rel="stylesheet" href="styles/layout.css"/>
		<link rel="stylesheet" href="styles/album.css"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>
		<!--Flickity CAROUSEL -->
		<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
		<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
		
		<title>Album</title>
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
					header('Location:Album.php?Lang=EN');
				}
			
			} else{
					header('Location:Album.php?Lang=EN');      
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
					header('Location:Album.php?Lang=EN');
				}
			
			} else{
					header('Location:Album.php?Lang=EN');      
				}
			?>
				
			</div>
			
			<article>
			<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'EN/Album_EN.php';
				}
				elseif($lang=='DE'){
					include 'DE/Album_DE.php';
				}
				elseif($lang=='JP'){
					include 'JP/Album_JP.php';
				}
				else{
					header('Location:Album.php?Lang=EN');
				}
			
			} else{
					header('Location:Album.php?Lang=EN');      
				}
			?>
			
			</article>
		</div>
		
		<footer>
		<p>&copy; Chadi Aebi 2016</p>
		</footer>
		
		
	</body>
</html>