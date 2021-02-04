<?php
global $db;
$docRef = $db->collection('ayarlar')->document('uygulama');
$ayarlar_uygulama = $docRef->snapshot();
