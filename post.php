<?php
    if(isset($_POST['veri'])) {
        $metin = $_POST['veri']; //Veriyi al ve metin değişkenine ata
        require 'mysql.php'; //MySQL bağlantı bilgilerini al
        $metin = mysqli_real_escape_string($baglanti, $metin);
        $sorgu = "INSERT INTO metinler VALUES (DEFAULT, '$metin', '-')"; //Metni veritabanına ekleme sorgusu
        mysqli_query($baglanti, $sorgu) or die(mysqli_error($baglanti)); //Soruguyu çalıştır
    }
?>