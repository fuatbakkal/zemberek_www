<?php
    $sunucu = "127.0.0.1";
    $kullanici = "kou";
    $sifre = "yazlab";
    $veri_tabani = "zemberek";
    
    // Bağlantı cümlesi
    $baglanti = new mysqli($sunucu, $kullanici, $sifre);

    // Bağlantıyı kontrol et
    if ($baglanti->connect_error) {
        die("Bağlantı kurulamadı: " . $baglanti->connect_error);
    }

    // Veritabanını seç
    mysqli_select_db($baglanti, $veri_tabani);
?>