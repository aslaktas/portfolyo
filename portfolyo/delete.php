<?php
// Veritabanı bağlantısı
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if (!$baglan) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($baglan, $_POST['id']);
    $sql = "DELETE FROM referanslar WHERE id = $id";
    if (mysqli_query($baglan, $sql)) {
        echo "Kayıt başarıyla silindi.";
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }

    header("Location: referanslar.php"); // Silme işleminden sonra yeniden yönlendirme
    exit();
}

mysqli_close($baglan);
?>







