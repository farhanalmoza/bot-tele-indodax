<?php
$path = "https://api.telegram.org/bot5364369309:AAExl14eivo5Ox5Heh8ewkDoYNiRLifxaJs";

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

    $pesan .= "\n\n/tampilkanDiagram - menampilkan diagram dari data yang ingin dilihat";

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


// perintah diagram
if (strpos($message, "/tampilkanDiagram") === 0) {
    $pesan = "Silakan pilih diagram yang ingin ditampilkan\n";

    $pesan .= "\n/diagram1 - untuk menampilkan jumlah data per level setiap harinya";
    $pesan .= "\n/diagram2 - untuk menampilkan jumlah data per level menurut jenis setiap harinya";

    $pesan = urlencode($pesan);
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}

if (strpos($message, "/diagram1") === 0) {
    $pesan = "Silakan pilih level yang ingin ditampilkan\n";
    $pesan .= "\n/crash1";

    $pesan = urlencode($pesan);
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}

if (strpos($message, "/diagram2") === 0) {
    $pesan = "Silakan pilih level yang ingin ditampilkan\n";
    $pesan .= "\n/crash1Jenis";

    $pesan = urlencode($pesan);
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}

// sql untuk menampilkan diagram
$sqlDiagram = "SELECT * FROM commands WHERE keyword = $message";
$resultDiagram = query($sqlDiagram);

if (count($resultDiagram) > 0) {
    $url = $path . "sendPhoto?chat_id=" . $chatId . "&caption" . $resultDiagram[0]["caption"];

    $post_fields = array('chat_id'   => $chatId,
        'photo'     => new CURLFile(realpath($resultDiagram[0]["photo"]))
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    $output = curl_exec($ch);
}