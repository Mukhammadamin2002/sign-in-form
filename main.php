<?php 
 if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
 	if (count($_POST) === 2) {
 		if (isset($_POST['email']) && !empty($_POST['email'])){
            $email = $_POST['email'];
 		}
 		if (isset($_POST['password']) && !empty($_POST['password'])){
            $password = $_POST['password'];
 		}
 		header("location: mein.php?email=$email&password=$password");
 	} else {
        echo "Less fields required: provided";
 	}
 } else if (strtolower($_SERVER['REQUEST_METHOD']) === 'get') {
 	echo "GET requste is not allowed";
 }

 ?>