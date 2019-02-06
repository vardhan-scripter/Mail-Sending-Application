<?php
    $name = test_input($_POST["name"]);
    $surname=test_input($_POST["surname"]);
    $email=test_input($_POST["email"]);
    $text=test_input($_POST["message"]);
    if (preg_match("/^[_a-zA-Z]+$/", $name,$surname)){
			$to = test_input($_POST["mainemail"]);;
			$subject = $name;
			$message = $text." from ".$email." Name: ".$name;
			$headers = $email."\r\n";
				if (mail($to, $subject, $message, $headers)) {
   					?><script type="text/javascript">
   						document.getElementById('success').onclick=alert('mail sent successfully');
   					</script><?php
				} else {
   					echo "ERROR";
				}
		}else{
				echo "Please write proper password";
		}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>