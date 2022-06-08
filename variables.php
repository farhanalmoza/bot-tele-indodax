<?php

$sql = "SELECT count(*) as jumlah FROM btc";
$result = query($sql);
$jumlah = $result[0]['jumlah'];
// buat jumlah menjadi format ribuan
$jumlah = number_format($jumlah, 0, ',', '.');

// harga IDR terkahir
$sql = "SELECT * FROM btc ORDER BY id DESC LIMIT 1";
$result = query($sql);
$harga_idr = $result[0]['hargaidr'];
// buat harga menjadi format rupiah
$harga_idr = number_format($harga_idr, 0, ',', '.');

// harga USD terkahir
$harga_usd = $result[0]['hargausdt'];
// buat harga menjadi format USD
$harga_usd = number_format($harga_usd, 0, ',', '.');

// volume terkahir (IDR)
$volume_idr = $result[0]['volidr'];

// volume terkahir (USD)
$volume_usd = $result[0]['volusdt'];
// buat volume menjadi format ribuan
$volume_usd = number_format($volume_usd, 0, ',', '.');