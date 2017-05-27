<!--http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="jp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		
		<link rel="icon" href="images/icon.png"/>
		
		<link rel="stylesheet" href="styles/layout.css"/>
		<link rel="stylesheet" href="styles/contact.css"/>
		<!-- copié depuis https://www.tinymce.com/download/ -->
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>
		<title>Contact</title>
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
					header('Location:Contact.php?Lang=EN');
				}
			
			} else{
					header('Location:Contact.php?Lang=EN');      
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
					header('Location:Contact.php?Lang=EN');
				}
			
			} else{
					header('Location:Contact.php?Lang=EN');      
				}
			?>
				
				
			</div>
			
			<article>
			<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					include 'EN/Contact_EN.php';
				}
				elseif($lang=='DE'){
					include 'DE/Contact_DE.php';
				}
				elseif($lang=='JP'){
					include 'JP/Contact_JP.php';
				}
				else{
					header('Location:Contact.php?Lang=EN');
				}
			
			} else{
					header('Location:Contact.php?Lang=EN');      
				}
			?>
			
			
			</article>
		</div>
		
		<footer>
		<p>&copy; Chadi Aebi 2016</p>
		</footer>
		
		
	</body>
</html>