<?php
    if(isset($_GET['kelimeler_frekanslar'])) {
        require 'mysql.php'; //MySQL bağlantı bilgilerini al
        $sorgu = "SELECT kelime,frekans FROM `kelimeler` ORDER BY `frekans` DESC"; //Kelimeleri frekansa göre sırala
        $sonuc = mysqli_query($baglanti, $sorgu) or die(mysqli_error($baglanti)); //Soruguyu çalıştır
        $veri = array();
		
        while($array = mysqli_fetch_assoc($sonuc)) {
        	$veri[] = $array;
        }
		
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($veri);
    } else {
        echo 'PARAMETRE HATASI';
    }
?>