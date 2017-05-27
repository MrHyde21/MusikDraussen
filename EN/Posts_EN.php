<?php
if(isset($usrRole) && $usrRole==1){?>
<div id="new-entry">
	<form action="#" method='post'>
		<label for="title">Title:
		</label>(Max=100)
		<br/>
		<input type="text" id="title" name="title" placeholder="Title" required/>
		<br/>
		<br/>

		<label for="idLang">Language:
		</label>
		<select name="idLang" id="idLang" required>
			<?php
		try{
			$languages=$DB->query("SELECT * from languages");
			$languages->setFetchMode(PDO::FETCH_OBJ);
			while($language=$languages->fetch()){

				echo "<option value='$language->idLanguages'>$language->langLanguages</option>";

			}
		}
		catch (PDOException $e){
			echo $e->getMessage();
			die();
		}
		?>
		</select>
		<label for="category">Category:
		</label>
		<select name="idCategory" id="category" required>
		<?php
		try{
			$categories=$DB->query("SELECT * from categories");
			$categories->setFetchMode(PDO::FETCH_OBJ);
			while($categorie=$categories->fetch()){
				echo "<option value='$categorie->idCategories'>$categorie->defaultnameCategories</option>";
			}
		}
		catch (PDOException $e){
			echo $e->getMessage();
			die();
		}
		?>
		</select>
		</br>
		<br/>

		<label for="article">Article:
		</label>
		<br/>
		<textarea id="editable" name="article"></textarea>
		<br/>
		<div id="submit-button-div">
			<input class="submit-button" type="submit" value="Submit">
			<input class="reset-button" type="reset" value="Clear">
		</div>
	</form>
</div>
<?php
}

try{
	$articles=$DB->query("SELECT * from articles INNER JOIN users ON idUsers=Users_idUsers");
	$articles->setFetchMode(PDO::FETCH_OBJ);

	while($article=$articles->fetch()){
		$displayPost=FALSE;
		$artUsername=$article->nameUsers;


		$idArticle=$article->idArticles;
		$articlesLang=$DB->query("SELECT * from articles_has_languages WHERE Languages_idLanguages=1 AND Articles_idArticles='$idArticle'");
		$articlesLang->setFetchMode(PDO::FETCH_OBJ);
		$articleLang=$articlesLang->fetch();

		if($article->defaultLanguages_idLanguages==1){
		$displayPost=TRUE;
		$artTitle=$article->defaulttitleArticles;
		$artDate=$article->defaultdateArticles;
		$artContent=$article->defaultcontentArticles;
		}
		elseif($articleLang->Languages_idLanguages==1){
		$displayPost=TRUE;
		$artTitle=$articleLang->titleArticles_Languages;
		$artDate=$articleLang->dateArticles_Languages;
		$artContent=$articleLang->contentArticles_Languages;
		}
		if($displayPost){
			echo "<div class='post'>";
			if(isset($usrRole) && $usrRole==1){echo "<a class='removeArtButton' href='javascript:void(0);' onclick='removeArticle();'><img src='images/close.png' alt='remove' title='remove'/></a>";}
			echo "<h3>$artTitle</h3>".
			"<span class='date'>Posted by <a href='About.php?Lang=".$_GET['Lang']."'>$artUsername</a> on $artDate</span>".
			"$artContent".
			"<hr noshade/><div class='post-footer'>
			<form action='#' method='post'>
			<textarea name='comment' rows='2' required></textarea>
			<br/>
			<div><input class='comment-button' type='submit' value='comment'></div>
			</form>
			</div>".
			"</div>";
		}
	}
}
catch (PDOException $e){
	echo $e->getMessage();
	die();
}
?>
