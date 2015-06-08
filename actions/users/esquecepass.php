<?php
	include_once('../../config/init.php');
  	include_once($BASE_DIR .'database/users.php');  

	$email = $_POST['esq'];
  //var_dump($email);
  $passnova = esquecepass ($email);

        $to = $email;
        $subject = 'Reset Passowrd';
        $message = "Your new password: $passnova. You can change it on Settings.\r\n Regards";
        $headers = 'From: Marknad <marknad@portugal.com>' . "\r\n";
        'Reply-To: no-reply@reply.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);

  header('Location: ' . $BASE_URL);
  exit();
?>
