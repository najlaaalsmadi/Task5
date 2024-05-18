<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $FullName = $_POST["FullName"];
   $email = $_POST["email"];
   $message=$_POST["message"];
   $to="najlaakalsmadi@gmail.com";
   $subject="New massage from $FullName";
   $body="Email:$email\nMessage:$message";
    mail($to,$subject,$body);
    header("Location:thank.html");
    exit();
}





?>