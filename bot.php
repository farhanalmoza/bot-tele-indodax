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

    $pesan .= "\n/crash1 - diagram level crash1";
    $pesan .= "\n/crash2 - diagram level crash2";
    $pesan .= "\n/wajar1 - diagram level wajar1";
    $pesan .= "\n/wajar2 - diagram level wajar2";
    $pesan .= "\n/recover1 - diagram level recover1";
    $pesan .= "\n/recover2 - diagram level recover2";
    $pesan .= "\n/moon2 - diagram level moon2";
    $pesan .= "\n/supermoon1 - diagram level supermoon1";
    $pesan .= "\n/supermoon2 - diagram level supermoon2";
    $pesan .= "\n/sama - diagram level sama";
    $pesan .= "\n/supercrash1 - diagram level supercrash1";
    $pesan .= "\n/supercrash2 - diagram level supercrash2";
    $pesan .= "\n/megacrash1 - diagram level megacrash1";
    $pesan .= "\n/megacrash2 - diagram level megacrash2";
    $pesan .= "\n/ultracrash1 - diagram level ultracrash1";
    $pesan .= "\n/ultracrash2 - diagram level ultracrash2";
    $pesan .= "\n/goldencrash1 - diagram level goldencrash1";
    $pesan .= "\n/goldencrash2 - diagram level goldencrash2";
    $pesan .= "\n/diamondcrash - diagram level diamondcrash";
    $pesan .= "\n/megamoon1 - diagram level megamoon1";
    $pesan .= "\n/megamoon2 - diagram level megamoon2";
    $pesan .= "\n/ultramoon1 - diagram level ultramoon1";
    $pesan .= "\n/ultramoon2 - diagram level ultramoon2";
    $pesan .= "\n/goldenmoon1 - diagram level goldenmoon1";

    $pesan = urlencode($pesan);
    file_get_contents($path."/sendMessage?chat_id=".$chatId."&text=".$pesan);
}

if (strpos($message, "/diagram2") === 0) {
    $pesan = "Silakan pilih level yang ingin ditampilkan\n";
    
    $pesan .= "\n/crash1jenis - diagram level crash1 berdasarkan jenisnya";
    $pesan .= "\n/crash2jenis - diagram level crash2 berdasarkan jenisnya";
    $pesan .= "\n/wajar1jenis - diagram level wajar1 berdasarkan jenisnya";
    $pesan .= "\n/wajar2jenis - diagram level wajar2 berdasarkan jenisnya";
    $pesan .= "\n/recover1jenis - diagram level recover1 berdasarkan jenisnya";
    $pesan .= "\n/recover2jenis - diagram level recover2 berdasarkan jenisnya";
    $pesan .= "\n/moon2jenis - diagram level moon2 berdasarkan jenisnya";
    $pesan .= "\n/supermoon1jenis - diagram level supermoon1 berdasarkan jenisnya";
    $pesan .= "\n/supermoon2jenis - diagram level supermoon2 berdasarkan jenisnya";
    $pesan .= "\n/samajenis - diagram level sama berdasarkan jenisnya";
    $pesan .= "\n/supercrash1jenis - diagram level supercrash1 berdasarkan jenisnya";
    $pesan .= "\n/supercrash2jenis - diagram level supercrash2 berdasarkan jenisnya";
    $pesan .= "\n/megacrash1jenis - diagram level megacrash1 berdasarkan jenisnya";
    $pesan .= "\n/megacrash2jenis - diagram level megacrash2 berdasarkan jenisnya";
    $pesan .= "\n/ultracrash1jenis - diagram level ultracrash1 berdasarkan jenisnya";
    $pesan .= "\n/ultracrash2jenis - diagram level ultracrash2 berdasarkan jenisnya";
    $pesan .= "\n/goldencrash1jenis - diagram level goldencrash1 berdasarkan jenisnya";
    $pesan .= "\n/goldencrash2jenis - diagram level goldencrash2 berdasarkan jenisnya";
    $pesan .= "\n/diamondcrashjenis - diagram level diamondcrash berdasarkan jenisnya";
    $pesan .= "\n/megamoon1jenis - diagram level megamoon1 berdasarkan jenisnya";
    $pesan .= "\n/megamoon2jenis - diagram level megamoon2 berdasarkan jenisnya";
    $pesan .= "\n/ultramoon1jenis - diagram level ultramoon1 berdasarkan jenisnya";
    $pesan .= "\n/ultramoon2jenis - diagram level ultramoon2 berdasarkan jenisnya";
    $pesan .= "\n/goldenmoon1jenis - diagram level goldenmoon1 berdasarkan jenisnya";

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