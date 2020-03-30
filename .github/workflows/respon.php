<?php
 
define('BOT_TOKEN', 'Bot Token Kamu'); //isi Token Bot Kamu
define('CHAT_ID','124567');//isi chat id dia
 
function pesan($pesan) {
    $pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
 
pesan("Pesan Kamu"); //pesan Kamu

//By Yusup Doang
