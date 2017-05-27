<?php
date_default_timezone_set('Europe/Zurich');
$date = date('Y-m-d H:i:s', time());

require_once("scripts/DBconnect.php");
if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
		$connected=true;
		$username=$_SESSION['username'];
		$usrRole=$_SESSION['usrRole'];

	}
if(isset($_POST['title'])&&!empty($_POST['title'])){
	$defaulttitle=addslashes($_POST['title']);
	$defaultarticle=addslashes($_POST['article']);
	$defaultidLang=$_POST['idLang'];
	$idCategory=$_POST['idCategory'];
	$idUser=$_SESSION['idUser'];
	$DB->exec("INSERT INTO articles (defaulttitleArticles,defaultcontentArticles,defaultdateArticles,defaultLanguages_idLanguages,Users_idUsers,Categories_idCategories)VALUES('$defaulttitle','$defaultarticle','$date','$defaultidLang','$idUser','$idCategory')");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="jp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

		<link rel="icon" href="images/icon.png"/>

		<link rel="stylesheet" href="styles/layout.css"/>
		<link rel="stylesheet" href="styles/posts.css"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="scripts/dynamic_menu.js"></script>

		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<!-- copié depuis https://www.tinymce.com/download/
		-->
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({
		selector:'textarea#editable',
		theme: 'modern',
		plugins: [
		  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
		  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
		  'save table contextmenu directionality emoticons template paste textcolor'
		],
		toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'

		});</script>


		<script src="scripts/postsExtend.js"></script>

		<title>Posts</title>
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
					include 'Nav_EN.php';
				}

			} else{
					include 'Nav_EN.php';
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
						header('Location: Posts.php?Lang=EN');
					}

				} else{
						header('Location: Posts.php?Lang=EN');
					}
				?>


			</div>

			<article>
			<?php
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];

				if($lang=='EN'){
					include 'EN/Posts_EN.php';
				}
				elseif($lang=='DE'){
					include 'DE/Posts_DE.php';
				}
				elseif($lang=='JP'){
					include 'JP/Posts_JP.php';
				}
				else{
					header('Location: Posts.php?Lang=EN');
				}

			} else{
					header('Location: Posts.php?Lang=EN');
				}
			?>
			</article>
		</div>

		<footer>
		<p>&copy; Chadi Aebi 2016</p>
		</footer>


	</body>
</html>
