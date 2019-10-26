<?php

$botToken = "997280523:AAGScn7XbNbKaeFu9Jgo1bh9f-8HvVuyZm0";

$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");
$update = json_decode($update ,TRUE);

$chatId=$uodate["message"]["from"]["id"];
$text = $update["message"]["text"];

$mess="ciao come stai?";

$agg = json($update,JSON_PRETTY_PRINT);

sendMessage($chatId,"ciao come stai?);

function sendMessage($chatId,$text)
{
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&text=".urlencode($text);
    file_get_contents($url);
}

?>
