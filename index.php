<?php
function sendMessage($chat_id, $message) {
    $url = "https://api.telegram.org/bot2081391287:AAHhRxBdd7aLNM2L3-M1gAVSZgcg3Od0_Y0/sendMessage?chat_id=$chat_id&text=$message";
    file_get_contents($url);
}
$update = file_get_contents('php://input');
$update = json_decode($update,TRUE);
$chat_id = $update['message']['from']['id'];
$message = $update['message']['text'];
if ($message == '/hi') {
    sendMessage($chat_id, '*خوش آمدید*');
}
if ($message == '/bye') {
    sendMessage($chat_id, 'خدافظ :)');
}
if ($message == '/ab') {
    sendMessage($chat_id, 'درباره خودت :|');
}
if ($message == 'سلام') {
    sendMessage($chat_id, 'سلام، خوش آمدید');
}
if ($message == 'خوبی؟') {
    sendMessage($chat_id, 'مرسی، تو چطوری؟');
}
if ($message == 'slm') {
    sendMessage($chat_id, 'Really??? :O');
}
