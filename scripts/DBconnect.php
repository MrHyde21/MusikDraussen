<?php
try{
				$DB = new PDO("mysql:host=localhost;dbname=musikdraussen", "root", "root");
				$DB->exec("SET CHARACTER SET utf8");
				$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		echo $e->getMessage();
		die();
	}
	?>