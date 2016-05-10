<?php

require 'mysql.php';
$sorgu_kelimeler = "SELECT * FROM `kelimeler`";
$sonuc_kelimeler = mysqli_query($baglanti, $sorgu_kelimeler) or die(mysqli_error($baglanti));
$sorgu_metinler = "SELECT * FROM `metinler`";
$sonuc_metinler = mysqli_query($baglanti, $sorgu_metinler) or die(mysqli_error($baglanti));

echo '<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Yaz Lab II - 1. Proje</title>
<style>

.floatLeft { width: 32%; float: left; }
.floatRight {width: 68%; float: right; }
.container { overflow: hidden; }

#tablo {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

tablo th {
	text-align: center;
	padding: 4px;
	border: 2px solid #ddd;
}

#tr_baslik {
	padding-top: 12px;
	padding-bottom: 12px;
	background-color: #0080FF;
	color: white;
	border: 1px solid #ddd;
}
</style>
</head>
<body>';

echo '
<div class="container">
<div class="floatLeft">
  <table id="tablo"><tr id="tr_baslik"><th>No</th><th>Kelime</th><th>Frekans</th></tr>';
while ($row = mysqli_fetch_array($sonuc_kelimeler)) {

    echo "<tr><th>" . $row['no'] . "</th><th>" . $row['kelime'] . "</th><th>" . $row['frekans'] . "</th></tr>";
}
echo '</table></div>';

echo '
    <div class="floatRight">
  <table id="tablo"><tr id="tr_baslik"><th>No</th><th>Orijinal Metin</th><th>İşlenmiş Metin</th></tr>';
while ($row = mysqli_fetch_array($sonuc_metinler)) {

    echo "<tr><td>" . $row['no'] . "</td><td>" . $row['orijinal_metin'] . "</td><td>" . $row['islenmis_metin'] . "</td></tr>";
}
echo'
  </table>
</div></div>
</body>
</html>';

mysqli_close($baglanti);
