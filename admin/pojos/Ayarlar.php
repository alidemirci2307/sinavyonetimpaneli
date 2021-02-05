<?php


class Ayarlar
{

    public static $_COLLECTION = 'ayarlar';
    public static $_DOCUMENT = 'uygulama';
    public static $_UYGULAMANIN_ADI = 'uygulamaninAdi';
    public static $_PAKET_ADI = 'paketAdi';


    public $uygulamaninAdi;
    public $paketAdi;

    function __construct() {
        $this->getFirebaseAyarlar();
    }

    /**
     * @return mixed
     */
    public function getUygulamaninAdi()
    {
        return $this->uygulamaninAdi;
    }




    public function firebaseUpdate(){
        global $db;
        $data = [
            Ayarlar::$_UYGULAMANIN_ADI => $this->uygulamaninAdi,
            Ayarlar::$_PAKET_ADI => $this->paketAdi
        ];
        $db->collection(Ayarlar::$_COLLECTION)->document(Ayarlar::$_DOCUMENT)->set($data);
    }

    public function getFirebaseAyarlar(){
        global $db;
        $docRef = $db->collection(Ayarlar::$_COLLECTION)->document(Ayarlar::$_DOCUMENT);
        $this->uygulamaninAdi = $docRef->snapshot()[Ayarlar::$_UYGULAMANIN_ADI];
        $this->paketAdi = $docRef->snapshot()[Ayarlar::$_PAKET_ADI];
    }


}