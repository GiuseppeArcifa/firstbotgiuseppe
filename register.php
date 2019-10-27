<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://firstbotgiuseppe.herokuapp.com/a.php';
$BOT_TOKEN = '997280523:AAGScn7XbNbKaeFu9Jgo1bh9f-8HvVuyZm0';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);
