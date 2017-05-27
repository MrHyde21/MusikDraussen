 <h2>Login</h2>
 
 <form action="#" method="post">
	 <fieldset>
		 <label for="username">Username</label> </br>
		 <input type="text" name="username" id="username" placeholder="Username"<?php if(isset($usernamePost)){echo "value='$usernamePost'";}?> required>
		 </br>
		 <?php if(isset($matchUser)&&!$matchUser){echo "<span style='color:red;'>Wrong Username</span><br/>";};?> 
		 <label for="username">Password</label></br>
		 <input type="password" name="password" id="password" placeholder="Password" required>
		 <?php 
			if(isset($matchPass)&&!$matchPass){echo "<span style='color:red;'>Wrong password</span><br/>";}
		 ?>
		 <input type="submit" value="Login">
	 </fieldset>
	 
 </form>