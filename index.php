<?php

$chat_id = 1056568886;
$message = "Hello World!";
$token = "5364369309:AAFY6qlUGCh55e80HAyQX_aZYr1acOOMFSU";
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message";

function kirim($pesan, $token, $chat_id) {
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$pesan";
    $result = file_get_contents($url, true);
    return $result;
}

function getUpdates($token) {
    $url = "https://api.telegram.org/bot$token/getUpdates";
    $result = file_get_contents($url, true);
    return $result;
}

$getUpdates = json_decode(getUpdates($token));
$length = count($getUpdates->result) -1;
var_dump($getUpdates->result[$length]->message->chat->id);
var_dump($getUpdates->result[$length]->message->text);
// kirim($message, $token, $chat_id);

?>