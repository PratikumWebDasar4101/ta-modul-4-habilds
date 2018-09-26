<?php
session_start();

$user = $_SESSION["user"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tgl_beli = $_POST["tanggal"];
$harga = 0.0;
$harga_peng = 0;

for ($i=0; $i < count($barang); $i++) { 
    if ($barang[$i] == "Susu")
        $harga += 10000;
    else if ($barang[$i] == "Kopi") 
        $harga += 5000;
    else if ($barang[$i] == "Sabun Mandi")
        $harga += 7000;
    else if ($barang[$i] == "Shampoo")
        $harga += 6000;
}

if($pengiriman == "JNE")
    $harga_peng = 20000;
if($pengiriman == "Tiki")
    $harga_peng = 18000;
if($pengiriman == "J&T")
    $harga_peng = 22000;

function total($a, $b) {
    return $a + $b;
}
?>