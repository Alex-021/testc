<?php
function sendMessage($chat_id, $message, $keyboard) {
    $url = "https://api.telegram.org/bot2081391287:AAHhRxBdd7aLNM2L3-M1gAVSZgcg3Od0_Y0/sendMessage?chat_id=$chat_id&text=$message&parse_mode=Markdown&reply_markup=$keyboard";
    file_get_contents($url);
}
