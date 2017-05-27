<!--<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<link rel="stylesheet" href="styles/layout.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>
		<title>Contact</title>
	</head>
	<body>
	<nav>-->
	
	<ul>
		<!-- la classe  class="currentPage" dans le <li> sert a determiner la page actuelle et appliquer un style -->
				<a href="Main.php?Lang=DE">
				<li class="<?php if(strtoupper ($_SERVER['PHP_SELF'])==strtoupper("/projet_html_php/Main.php")){echo 'currentPage'; }else { echo ''; } ?>">
				Home
				</li>
				</a>
				<a href="Posts.php?Lang=DE">
				<li class="<?php if(strtoupper ($_SERVER['PHP_SELF'])==strtoupper("/projet_html_php/Posts.php")){echo 'currentPage'; }else { echo ''; } ?>">
				Beiträge
				</li>
				</a>
				<a href="Album.php?Lang=DE">
				<li class="<?php if(strtoupper ($_SERVER['PHP_SELF'])==strtoupper("/projet_html_php/Album.php")){echo 'currentPage'; }else { echo ''; } ?>">
				Fotoalbum
				</li>
				</a>
				<a href="About.php?Lang=DE">
				<li class="<?php if(strtoupper ($_SERVER['PHP_SELF'])==strtoupper("/projet_html_php/About.php")){echo 'currentPage'; }else { echo ''; } ?>">
				Profil
				</li>
				</a>
				<a href="Contact.php?Lang=DE">
				<li class="<?php if(strtoupper ($_SERVER['PHP_SELF'])==strtoupper("/projet_html_php/Contact.php")){echo 'currentPage'; }else { echo ''; } ?>">
				Kontakt
				</li>
				</a>
	</ul>
	
<!--</nav>
</body>
</html>-->