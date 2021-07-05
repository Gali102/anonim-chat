<?
$recepient = "vakhitov797@gmail.com";
$siteName = "Обращение с AnonimChat";

$name = trim($_POST["name"]);
$object = trim($_POST["object"]);
$message = trim($_POST["message"]);
$message = "Имя: $name \n Тема обращения: $object \n Сообщения: $message";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");