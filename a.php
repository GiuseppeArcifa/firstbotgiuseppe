<?php 
$content = file_get_contents("php://input"); 
$update = json_decode($content, true); 
if(!$update) { exit; } 
$message = isset($update['message']) ? $update['message'] : ""; 
$messageId = isset($message['message_id']) ? $message['message_id'] : ""; 
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : ""; 
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : ""; 
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : ""; 
$username = isset($message['chat']['username']) ? $message['chat']['username'] : ""; 
$date = isset($message['date']) ? $message['date'] : ""; 
$text = isset($message['text']) ? $message['text'] : ""; 
switch ($text){ 
  case "ciao":
    $text="Ciao $firstname come stai?"; 
    break; 
  case "Ciao": 
    $text="Ciao $firstname come stai?";
    break; case "Tutto bene tu?":
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
    break; case "Che fai?": 
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
  default: 
    $text="Non capisco";
    break; 
} 
$text = trim($text); 
$text = strtolower($text); 
header("Content-Type: application/json"); 
$parameters = array('chat_id' => $chatId, "text" => $text); $parameters["method"] = "sendMessage"; echo json_encode($parameters); 
?>


