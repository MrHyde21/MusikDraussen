<?php 
	require_once("scripts/DBconnect.php");
	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_GET['Logout'])&&$_GET['Logout']){
		unset($_SESSION['username']);
		session_destroy();
		header('Location:Main.php?Lang=EN');
	}
	if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
		$connected=true;
		$username=$_SESSION['username'];
	}
	
	
?>
<div class="account">
<?php 
if(isset($connected)&&$connected){

if(isset($_GET['Lang'])){
	$lang= $_GET['Lang'];

	if($lang=='EN'){
		echo 'Hello '.$username." (<a id='disconnect' href='".$_SERVER['REQUEST_URI']."&Logout=true'>disconnect</a>)";
	}
	elseif($lang=='DE'){
		echo 'Hallo '.$username." (<a id='disconnect' href='".$_SERVER['REQUEST_URI']."&Logout=true'>abmelden</a>)";
	}
	elseif($lang=='JP'){
		echo 'こんにちは'.$username." (<a id='disconnect' href='".$_SERVER['REQUEST_URI']."&Logout=true'>ログアウト</a>)";
	}
	else{
		echo 'Hello '.$username." (<a id='disconnect' href='".$_SERVER['REQUEST_URI']."&Logout=true'>disconnect</a>)";
	}

	}else{
		echo 'Hello '.$username." (<a id='disconnect' href='".$_SERVER['REQUEST_URI']."&Logout=true'>disconnect</a>)";      
	}

}
	else{
?>
	<a href="Login.php
	<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					echo '?Lang=EN';
				}
				elseif($lang=='DE'){
					echo '?Lang=DE';
				}
				elseif($lang=='JP'){
					echo '?Lang=JP';
				}
				else{
					echo '';
				}
			
			} else{
					echo '';      
				}
	?>
	"> 
	<?php 
			
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				
				if($lang=='EN'){
		
						echo 'Login';
					
				}
				elseif($lang=='DE'){
					
						echo 'Anmelden';
					
				}
				elseif($lang=='JP'){
				
					echo 'ログイン';
				}
				else{
					
					echo 'Login';
				
			
			}} else{
				
					echo 'Login';     
				}
	?>
	</a>
	 / 
	<a href="Register.php
	<?php 
			if(isset($_GET['Lang'])){
				$lang= $_GET['Lang'];
				
				if($lang=='EN'){
					echo '?Lang=EN';
				}
				elseif($lang=='DE'){
					echo '?Lang=DE';
				}
				elseif($lang=='JP'){
					echo '?Lang=JP';
				}
				else{
					echo '';
				}
			
			} else{
					echo '';      
				}
	?>
	
	
	"> 
	<?php 
		
				if(isset($_GET['Lang'])){
					$lang= $_GET['Lang'];
				
					if($lang=='EN'){
						echo 'Register';
					}
					elseif($lang=='DE'){
						echo 'Registrieren';
					}
					elseif($lang=='JP'){
						echo '登録';
					}
					else{
						echo 'Register';
					}
				
				} else{
						echo 'Register';      
					}
			
				
	?>
	
	</a>
	<?php
	}
	?>
</div>

<a class="<?php if(isset($_GET['Lang']) AND $_GET['Lang']== 'EN'){echo 'currentLang'; }else { echo ''; } ?>" href="<?php echo $_SERVER['PHP_SELF'].'?Lang=EN'?>"> EN</a>
<a class="<?php if(isset($_GET['Lang']) AND $_GET['Lang']== 'DE'){echo 'currentLang'; }else { echo ''; } ?>" href="<?php echo $_SERVER['PHP_SELF'].'?Lang=DE'?>"> DE</a>
<a class="<?php if(isset($_GET['Lang']) AND $_GET['Lang']== 'JP'){echo 'currentLang'; }else { echo ''; } ?>" href="<?php echo $_SERVER['PHP_SELF'].'?Lang=JP'?>"> 日本</a>
