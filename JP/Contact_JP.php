 <h2>連絡先 </h2>
 <form action="Contact.php?Lang=DE" method="post">
	
	<fieldset id="contactForm">
		<legend>メールを送る</legend>
			<label for="from">差出人: </label><input name"from" id="from" required>
			</br></br>
			<textarea name="message" required></textarea>
			</br>
			<div id="submit">
			<input type="reset" value="reset" id="reset">
			<input type="submit" value="送る" id="submit">
			<input type="hidden" name="button_pressed" value="1" />
			</div>
			<?php 
			
			if (isset($_POST['button_pressed'])&&isset($_POST['message'])) {
				
				$headers = "From: " . strip_tags($_POST['from']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				mail("chadi-aebi@hotmail.com","Musik Draussen", $_POST['message'],$headers);
			}
			?>
	</fieldset>
	
 </form>
 
 <table>
	<tr>
		<td>
			<h3>八島 芽衣</h3>
			<p>Ｅメールアドレス : <a href="mailto:meiyashima@musikdraussen.com" target="_top">meiyashima@musikdraussen.com</a></p>
		</td>
		<td>
			<h3>アドミン</h3>
			<p>Ｅメールアドレス : <a href="mailto:admin@musikdraussen.com" target="_top">admin@musikdraussen.com</a></p>
		</td>
	</tr>
 </table>