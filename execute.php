<?php
$botToken = "997280523:AAGScn7XbNbKaeFu9Jgo1bh9f-8HvVuyZm0";

$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");
$update = json_decode($update , true);

$chatId=$uodate["message"]["from"]["id"];
$text = $update["message"]["text"];

switch ($text){
  case "ciao":
    $text="Ciao $firstname come stai?";
    break;
  case "Ciao":
    $text="Ciao $firstname come stai?";
    break;
  case "Tutto bene tu?":
    $text = "Benissimo grazie!";
    break;
  case "tutto bene tu?":
    $text = "Benissimo grazie!";
    break;
   case "bene tu?":
    $text = "Benissimo grazie!";
    break;
  case "Bene tu?":
    $text = "Benissimo grazie!";
    break;
  case "Che fai?":
    $text = "Programmo tu?";
    break;
  case "che fai?":
    $text = "Programmo tu?";
    break;
  case "Niente":
    $text="Capito";
    break;
  case "niente":
    $text="Capito";
    break;
  case "ho fame":
    $text = "io no";
    break;
  default:
    $text="Non capisco";
    break;
}
sendMessage($chatId,$text);

function sendMessage($chatId,$text)
{
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&text=".urlencode($text);
    file_get_contents($url);
}

?>
