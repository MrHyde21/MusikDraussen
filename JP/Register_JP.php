 <title>登録 </title>
 <h2>登録 </h2>
 
 <form name="register" action="Main.php?Lang=JP" method="post">
	 <fieldset>
		<label for="mail">Ｅメールアドレス</label> </br>
		<input type="email" name="mail" id="mail" placeholder="Ｅメールアドレス" required>
		</br>
		 <?php if(isset($mailmatch)&&$mailmatch){echo "<span style='color:red;'>Diese E-mail-Adresse ist schon belegt </span><br/>";}?>
		<label for="username">ユーザー名</label> </br>
		<input type="text" name="username" id="username" placeholder="ユーザー名" required>
		</br>
		<?php 
			if(isset($usermatch)&&$usermatch){echo "<span style='color:red;'>そのユーザ名は既に使われています</span><br/>";}
		?>
		<label for="username">パスワード</label></br>
		<input type="password" name="password" id="password" placeholder="パスワード"  pattern=".{8}" maxlength="128" oninvalid="this.setCustomValidity('The password must be at least 8 characters.')" onchange="try{setCustomValidity('')}catch(e){}" required>
		<input type="password" name="password2" id="password2" placeholder="パスワード(確認用に再入力)"  pattern=".{8}" maxlength="128" oninvalid="this.setCustomValidity('The password must be at least 8 characters.')" onchange="try{setCustomValidity('')}catch(e){}" required>
		<?php 
			if(isset($passConfirm)&&$passConfirm){echo "<span style='color:red;'>パスワードが一致しません</span><br/>";}
		?>
		<input type="submit" value="登録 ">
	 </fieldset>
 </form>