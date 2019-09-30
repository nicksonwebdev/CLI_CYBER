<?php
$to = 'nicksonwebdeveloper@gmail.com';
$subject = 'Contato - Cyber Chronus';
$name = $_POST['fname'];
$massage = $_POST['email'];
$subject = $_POST['subject'];
$dest = $_POST['message'];

$headers = "From: " .$dest;
mail($to, $subject, $name, $massage, $headers);

