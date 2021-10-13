<?php
function sendMessage($chat_id, $message, $keyboard) {
    $url = "https://api.telegram.org/bot2051670997:AAFfQ1soA-qMlJNGclkeTpRayA2Ni8pu2vI/sendMessage?chat_id=$chat_id&text=$message&parse_mode=Markdown&reply_markup=$keyboard";
    file_get_contents($url);
}