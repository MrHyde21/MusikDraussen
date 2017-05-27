 <h2>Anmelden</h2>
 
 <form name="register" action="Main.php?Lang=DE" method="post">
	 <fieldset>
		<label for="mail">E-Mail</label> </br>
		 <input type="email" name="mail" id="mail" placeholder="Mailadresse" required>
		 </br>
		 <?php if(isset($mailmatch)&&$mailmatch){echo "<span style='color:red;'>Diese E-mail-Adresse ist schon belegt </span><br/>";}?>
		 <label for="username">Benutzername</label> </br>
		 <input type="text" name="username" id="username" placeholder="Benutzername" required>
		 </br>
		 <?php 
			if(isset($usermatch)&&$usermatch){echo "<span style='color:red;'>Dieser Benutzername wird leider schon verwendet.</span><br/>";}
		 ?>
		 <label for="username">Passwort</label></br>
		 <input type="password" name="password" id="password" placeholder="Passwort" pattern=".{8}" maxlength="128" oninvalid="this.setCustomValidity('The password must be at least 8 characters.')" onchange="try{setCustomValidity('')}catch(e){}" required>
		 <input type="password" name="password2" id="password2" placeholder="Passwort bestätigen" pattern=".{8}" maxlength="128" oninvalid="this.setCustomValidity('The password must be at least 8 characters.')" onchange="try{setCustomValidity('')}catch(e){}" required>
		<?php 
			if(isset($passConfirm)&&$passConfirm){echo "<span style='color:red;'>Passwörter stimmen nicht überein.</span><br/>";}
		?>
		 <input type="submit" value="Anmelden">
 
	 </fieldset>
 </form>