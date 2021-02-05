<?php
require_once __DIR__ .'/admin/pojos/Ayarlar.php';

$uygulamanin_adi = "Sınav Yönetim Paneli";
$paket_adi = "com.demirci.deneme2";


global $db;

$ayarlar_uygulama = new Ayarlar();
$ayarlar_uygulama->uygulamaninAdi = $uygulamanin_adi;
$ayarlar_uygulama->paketAdi = $paket_adi;
$ayarlar_uygulama->firebaseUpdate();


