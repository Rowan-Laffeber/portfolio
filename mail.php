<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Email = $_POST['Email'];
$telefoon = $_POST['telefoon'];
$Subject= $_POST['Subject'];
$Message = $_POST['Message'];

$mailheader = "From:".$firstname. .$lastname."<".$Email.">\r\n";
$recipient = "9026051@student.zadkine.nl";
mail($recipient, $Subject, $Message, $mailheader)
or die ("Error!");
echo"message send";
?>