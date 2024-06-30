<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim Bilgilerini Düzenle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@ViewBag.Title - Blog Uygulaması</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        /* Google Font Import */
        @import url('https://fonts.googleapis.com/css2?          family=Jost:ital,wght@0,100..900;1,100..900&family=Pacifico&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');

        :root {
            --sidebar-width: 250px;
            --header-height: 3.5rem;
            --primary-color: #000;
            --primary-color-dark: #F8F4E1;
            --primary-color-light: #F6EEC9;
            --title-color: hsl(0, 0%, 20%);
            --text-color: hsl(0, 0%, 40%);
            --body-color: hsl(210, 4%, 91%);
            --container-color: #fff;
            --border-color: hsl(0, 0%, 80%);
            --white: #fff;
            --body-font: 'Jost', 'sans-serif';
            --larger-font-size: 1.2rem;
            --weight-600: 600;
           
        }

        /* Genel Stiller */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth; /* Yumuşak kaydırma */
        }

        /* Form ve Sayfa Genel Stilleri */
        input, textarea, button, body {
            font-family: var(--body-font); /* Sayfa yazı tipi */
            font-size: var(--larger-font-size); /* Genel font boyutu */
        }

        main {
            background-color: var(--body-color); /* Ana arka plan rengi */
            color: var(--text-color); /* Ana metin rengi */
        }

        /* Form Elemanları */
        input, textarea, button {
            outline: none; /* Dış hat kaldırma */
            border: none; /* Sınır kaldırma */
            background-color: transparent; /* Arka plan rengi şeffaf */
        }

        /* Başlıklar */
        h1, h2, h3 {
            color: var(--title-color); /* Başlık rengi */
            font-weight: var(--weight-600); /* Font ağırlığı */
        }

        /* Liste Stili */
        ul {
            list-style: none; /* Liste stilini kaldırma */
        }

        /* Bağlantılar */
        a {
            text-decoration: none; /* Altçizgi kaldırma */
        }

        /* Sidebar Stilleri */
        .sidebar {
            position: fixed; /* Sabit konum */
            width: var(--sidebar-width); /* Genişlik */
            height: 100%; /* Tam yükseklik */
            background-color: var(--container-color); /* Arka plan rengi */
            padding: 2rem 1rem; /* Dolgu */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Kutu gölgesi */
        }

        .sidebar__logo {
            
            font-family: 'Pacifico', sans-serif;
            font-size: 2.5rem;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 2rem;
        }

        .sidebar__nav {
            display: flex;
            flex-direction: column; /* Dikey düzen */
            row-gap: 1rem; /* Satır boşluğu */
        }

        .sidebar__link {
            
            color: var(--text-color); /* Renk */
            font-size: var(--larger-font-size); /* Font boyutu */
            transition: all .3s ease; /* Geçiş efekti */
            padding: 0.5rem; /* Dolgu */
            border-radius: 4px; /* Kenar yuvarlama */
        }

        .sidebar__link:hover {
            background-color: var(--primary-color-light); /* Arka plan rengi */
            color: var(--primary-color); /* Renk */
        }

        .sidebar__link.active {
            background-color: var(--primary-color); /* Aktif bağlantı arka plan rengi */
            color: var(--white); /* Aktif bağlantı rengi */
        }

.main-content {
    margin-left: var(--sidebar-width);
    padding: 20px;
}

.admin-section {
    background-color: var(--white);
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.admin-section h2 {
    margin-top: 0;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--border-color);
}

.admin-section form {
    margin-top: 20px;
}

.admin-section label {
    display: block;
    margin-bottom: 5px;
    color: var(--title-color);
}

.admin-section input[type="text"],
.admin-section textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid var(--border-color);
    border-radius: 4px;
}

.admin-section textarea {
    height: 100px;
}

.admin-section input[type="submit"] {
    background-color: var(--primary-color);
    color: var(--white);
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.admin-section input[type="submit"]:hover {
    background-color: var(--primary-color-dark);
}

/* Responsive Stiller */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        padding-bottom: 20px;
    }

    .main-content {
        margin-left: 0;
    }
}
        </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar__logo">Admin Paneli</div>
        <nav class="sidebar__nav">
                <a href="anasayfa.php" class="w3-bar w3-button btn-warning">Anasayfa</a>
                <a href="hakkimda.php" class="w3-bar w3-button btn-secondary">Hakkımda</a>
                <a href="egitim.php" class="w3-bar w3-button btn-secondary">Eğitim & Deneyim</a>
                <a href="hizmetler.php"class="w3-bar w3-button btn-secondary">Hizmetler</a>
                <a href="yetenekler.php"class="w3-bar w3-button btn-secondary">Yetenekler</a>
                <a href="projelerim.php" class="w3-bar w3-button btn-secondary">Portfolyo</a>
                <a href="referanslar.php"  class="w3-bar w3-button btn-secondary">Referanslar</a>
                <a href="iletisim.php"  class="w3-bar w3-button btn-secondary">İletişim</a>
                <a href="login.php" class="w3-bar w3-button btn-danger">Çıkış Yap</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <section id="egitim-deneyim" class="admin-section">
            <h2>Eğitim & Deneyim</h2>
            <?php
            if (isset($_GET['kayit']) && $_GET['kayit'] == 'basarili') {
                if (isset($_GET['form_type']) && $_GET['form_type'] == 'egitim') {
                    echo "<p>Eğitim bilgileri başarıyla kaydedildi.</p>";
                } elseif (isset($_GET['form_type']) && $_GET['form_type'] == 'deneyim') {
                    echo "<p>Deneyim bilgileri başarıyla kaydedildi.</p>";
                }
            }
            ?>
            
            <!-- Eğitim Formu -->
            <form action="egitim.php" method="post">
                <input type="hidden" name="form_type" value="egitim">
                <h3>Eğitim Bilgileri</h3><br>
                <label for="okul">Okul:</label>
                <input type="text" id="okul" name="okul" required>
                <br>
                <label for="bölüm">Bölüm:</label>
                <input type="text" id="bölüm" name="bölüm" required>
                <br>
                <label for="tarih">Tarih:</label>
                <input type="text" id="tarih" name="tarih" required>
                <br>
                <label for="aciklama">Açıklama:</label><br>
                <textarea id="aciklama" name="aciklama" rows="4" cols="50" required></textarea>
                <br><br>
                <input type="submit" value="Kaydet">
                <br><br>
            </form>

            <!-- Deneyim Formu -->
            <form action="egitim.php" method="post">
                <input type="hidden" name="form_type" value="deneyim">
                <h3>Deneyim Bilgileri</h3><br>
                <label for="sirket">Şirket:</label>
                <input type="text" id="sirket" name="sirket" required>
                <br>
                <label for="pozisyon">Pozisyon:</label>
                <input type="text" id="pozisyon" name="pozisyon" required>
                <br>
                <label for="deneyim_tarih">Tarih:</label>
                <input type="text" id="deneyim_tarih" name="deneyim_tarih" required>
                <br>
                <label for="deneyim_aciklama">Açıklama:</label><br>
                <textarea id="deneyim_aciklama" name="deneyim_aciklama" rows="4" cols="50" required></textarea>
                <br><br>
                <input type="submit" value="Kaydet">
                <br><br>
            </form>
        </section>
    </div>
</body>

</html>

<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Veritabanı bağlantısı
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if (!$baglan) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}

// Formdan gelen verileri işleme sadece POST isteği olduğunda
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = $_POST['form_type'];

    if ($form_type == 'egitim') {
        // Eğitim formu verileri
        $okul_adi = mysqli_real_escape_string($baglan, $_POST['okul']);
        $okul_bölüm = mysqli_real_escape_string($baglan, $_POST['bölüm']);
        $okul_tarih = mysqli_real_escape_string($baglan, $_POST['tarih']);
        $okul_aciklama = mysqli_real_escape_string($baglan, $_POST['aciklama']);

        // SQL sorgusu
        $sql = "INSERT INTO egitim (okul_adi, okul_bölüm, okul_tarih, okul_aciklama) 
                VALUES ('$okul_adi', '$okul_bölüm', '$okul_tarih', '$okul_aciklama')";
    } elseif ($form_type == 'deneyim') {
        // Deneyim formu verileri
        $sirket_adi = mysqli_real_escape_string($baglan, $_POST['sirket']);
        $sirket_pozisyon = mysqli_real_escape_string($baglan, $_POST['pozisyon']);
        $sirket_tarih = mysqli_real_escape_string($baglan, $_POST['deneyim_tarih']);
        $sirket_aciklama = mysqli_real_escape_string($baglan, $_POST['deneyim_aciklama']);

        // SQL sorgusu
        $sql = "INSERT INTO deneyim (sirket_adi, sirket_pozisyon, sirket_tarih, sirket_aciklama) 
                VALUES ('$sirket_adi', '$sirket_pozisyon', '$sirket_tarih', '$sirket_aciklama')";
    }

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        // Başarılı kayıttan sonra aynı sayfaya yönlendir
        header("Location: egitim.php?kayit=basarili");
        exit(); // Script'in daha fazla çalışmasını engeller
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>
