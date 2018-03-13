<?php
 $usr="root";
 $pwd="root";

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){

$username=$_POST['username'];
$password=$_POST['password'];

 
			if(($username==$usr) && ($password==$pwd) ){

								header("Location: /");
								exit;

				}else{

							header("Location: /Login");
							exit;
							}
	}else{
			echo "<br>Cannot be left empty!";
			}
?>
