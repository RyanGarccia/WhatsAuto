<?php
$app_name = $_POST["app"];
$sender = $_POST["sender"];
$message = $_POST["message"];
$phone = $_POST["phone"];

$response = array("reply" => "Olá, $sender segue a nossa chave pix: $pix.");
echo json_encode($response);
?>
