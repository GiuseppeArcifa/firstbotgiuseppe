<?php

$botToken = "997280523:AAGScn7XbNbKaeFu9Jgo1bh9f-8HvVuyZm0";

$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");
$update = json_decode($update , true);

$chatId=$uodate["message"]["from"]["id"];
$text = $update["message"]["text"];

$mess="ciao come stai?";

sendMessage($chatId,$mess);

function sendMessage($chatId,$text)
{
    $url = $GLOBAL[website]."/sendMessage?chat_id=$chatId&text=".urlencode($text);
    file_get_contents($url);
}

?>