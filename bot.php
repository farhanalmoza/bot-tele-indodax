<?php
$path = "https://api.telegram.org/bot5364369309:AAFY6qlUGCh55e80HAyQX_aZYr1acOOMFSU";

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

include "conn.php";
include "variables.php";

if (strpos($message, "/start") === 0) {
    $pesan = "Anda bisa menggunakan bot ini dengan mengetikkan perintah di bawah ini: \n";
    $pesan .= "\n/jumlahData - menampilkan jumlah seluruh data";
    $pesan .= "\n/hargaTerakhirIDR - menampilkan harga terakhir dalam Rupiah";
    $pesan .= "\n/hargaTerakhirUSD - menampilkan harga terakhir dalam dollar";
    $pesan .= "\n/volTerakhirIDR - menampilkan volume terakhir dalam rupiah";
    $pesan .= "\n/volTerakhirUSD - menampilkan volume terakhir dalam dollar";

    $pesan = urlencode($pesan);
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}


if (strpos($message, "/jumlahData") === 0) {
    $pesan = "Jumlah seluruh data : $jumlah";
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}

if (strpos($message, "/hargaTerakhirIDR") === 0) {
    $pesan = "Harga terakhir IDR : $harga_idr";
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}
if (strpos($message, "/hargaTerakhirUSD") === 0) {
    $pesan = "Harga terakhir USD : $harga_usd";
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}
if (strpos($message, "/volTerakhirIDR") === 0) {
    $pesan = "Volume terakhir IDR : $volume_idr";
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}

if (strpos($message, "/volTerakhirUSD") === 0) {
    $pesan = "Volume terakhir USD : $volume_usd";
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}