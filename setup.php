<?php

$uygulamanin_adi = "Sınav Yönetim Paneli";
$paket_adi = "com.demirci.deneme";
$ulke = "Türkiye";


global $db;

$data = [
    'uygulamanin_adi' => $uygulamanin_adi,
    'paket_adi' => $paket_adi,
    'ulke' => $ulke
];
$db->collection('ayarlar')->document('uygulama')->set($data);


