<?php 
$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']

if(mail('desarrollo.nca@gmail.com', $email, $message)){
	echo 'Se mando todo crack'
}else{
	echo 'No se mando nada crack'
}

 ?>
