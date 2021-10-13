<?php
require_once './func.inc.php';
$update = file_get_contents('php://input');
// file_put_contents('bot.txt',$update);
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
