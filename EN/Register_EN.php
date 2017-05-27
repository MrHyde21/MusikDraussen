 <title>Register</title>
 <h2>Register</h2>
 
 <form name="register" action="#" method="post">
	 <fieldset>
		<label for="mail">Email</label> </br>
		 <input type="email" name="mail" id="mail" placeholder="Email adress" <?php if(isset($mailmatch)&&$mailmatch){echo "value=$mailPost";}?> maxlength="254" required>
		 </br>
		<?php if(isset($mailmatch)&&$mailmatch){echo "<span style='color:red;'>This adress is already used.</span><br/>";}?>
		 <label for="username">Username</label> </br>
		 <input type="text" name="username" id="username" placeholder="Username" <?php if(isset($usermatch)&&$usermatch){echo "value=$usernamePost";}?> maxlength="30" required>
		 </br>
		<?php 
		if(isset($usermatch)&&$usermatch){echo "<span style='color:red;'>This username is taken.</span><br/>";}
		?>
		 <label for="username">Password</label></br>
		 <input type="password" name="password" id="password" placeholder="Password" pattern=".{8}" maxlength="128" oninvalid="this.setCustomValidity('The password must be at least 8 characters.')" onchange="try{setCustomValidity('')}catch(e){}" required>
		 <input type="password" name="password2" id="password2" placeholder="Confirm password" pattern=".{8}" maxlength="128" oninvalid="this.setCustomValidity('The password must be at least 8 characters.')" onchange="try{setCustomValidity('')}catch(e){}" required>
		 <?php 
			if(isset($passConfirm)&&!$passConfirm){echo "<span style='color:red;'>The passwords do not match.</span><br/>";}
		?>
		 <input type="submit" value="Register">
	
	 </fieldset>
 </form>