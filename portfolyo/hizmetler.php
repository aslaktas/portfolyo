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

// Formdan gelen verileri işleme sadece POST isteği olduğunda
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $baslik = mysqli_real_escape_string($baglan, $_POST['başlık']);
    $aciklama = mysqli_real_escape_string($baglan, $_POST['aciklama']);

    // SQL sorgusu
    $sql = "INSERT INTO hizmetler (baslik, aciklama) VALUES ('$baslik', '$aciklama')";

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        echo "Yeni hizmet başarıyla eklendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }

    // Formun yeniden gönderilmesini önlemek için
    header("Location: hizmetler.php"); // Aynı sayfaya yönlendir
    exit(); // Script'in daha fazla çalışmasını engeller
}

// Bağlantıyı kapat
mysqli_close($baglan);
?>






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
            --primary-color-light: #EEEEE;
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
            scroll-behavior: smooth;
            /* Yumuşak kaydırma */
        }

        /* Form ve Sayfa Genel Stilleri */
        input,
        textarea,
        button,
        body {
            font-family: var(--body-font);
            /* Sayfa yazı tipi */
            font-size: var(--larger-font-size);
            /* Genel font boyutu */
            background-color: var(--body-color);
            /* Arka plan rengi */
        }

        main {
            background-color: var(--body-color);
            /* Ana arka plan rengi */
            color: var(--text-color);
            /* Ana metin rengi */
        }

        /* Form Elemanları */
        input,
        textarea,
        button {
            outline: none;
            /* Dış hat kaldırma */
            border: none;
            /* Sınır kaldırma */
            background-color: transparent;
            /* Arka plan rengi şeffaf */
        }

        /* Başlıklar */
        h1,
        h2,
        h3 {
            color: var(--title-color);
            /* Başlık rengi */
            font-weight: var(--weight-600);
            /* Font ağırlığı */
        }

        /* Liste Stili */
        ul {
            list-style: none;
            /* Liste stilini kaldırma */
        }

        /* Bağlantılar */
        a {
            text-decoration: none;
            /* Altçizgi kaldırma */
        }

        /* Sidebar Stilleri */
        .sidebar {
            position: fixed;
            /* Sabit konum */
            width: var(--sidebar-width);
            /* Genişlik */
            height: 100%;
            /* Tam yükseklik */
            background-color: var(--container-color);
            /* Arka plan rengi */
            padding: 2rem 1rem;
            /* Dolgu */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            /* Kutu gölgesi */
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
            flex-direction: column;
            /* Dikey düzen */
            row-gap: 1rem;
            /* Satır boşluğu */
        }

        .sidebar__link {

            color: var(--text-color);
            /* Renk */
            font-size: var(--larger-font-size);
            /* Font boyutu */
            transition: all .3s ease;
            /* Geçiş efekti */
            padding: 0.5rem;
            /* Dolgu */
            border-radius: 4px;
            /* Kenar yuvarlama */
        }

        .sidebar__link:hover {
            background-color: var(--primary-color-light);
            /* Arka plan rengi */
            color: var(--primary-color);
            /* Renk */
        }

        .sidebar__link.active {
            background-color: var(--primary-color);
            /* Aktif bağlantı arka plan rengi */
            color: var(--white);
            /* Aktif bağlantı rengi */
        }

        
        .main-content {
            margin-left: var(--sidebar-width); /* Sol boşluk */
            padding: 2rem; /* Dolgu */
            background-color: var(--body-color); /* Arka plan rengi */
        }

        .content {
            margin-top: 1rem; /* Üst boşluk */
            margin-bottom: 0px;
        }

        h1 {
            color: var(--primary-color); /* Başlık rengi */
        }
        
        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background-color: #fff;
            color: var(--text-color);
        }
        

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--text-color);
        }

        button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            background-color: var(--primary-color);
            color: var(--white);
            font-size: var(--larger-font-size);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #050C9C;
            transition: all 0.2s ease;
            
            

            
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
            <a href="hizmetler.php" class="w3-bar w3-button btn-secondary">Hizmetler</a>
            <a href="yetenekler.php" class="w3-bar w3-button btn-secondary">Yetenekler</a>
            <a href="projelerim.php" class="w3-bar w3-button btn-secondary">Portfolyo</a>
            <a href="referanslar.php" class="w3-bar w3-button btn-secondary">Referanslar</a>
            <a href="iletisim.php" class="w3-bar w3-button btn-secondary">İletişim</a>
            <a href="login.php" class="w3-bar w3-button btn-danger">Çıkış Yap</a>
    </aside>
    <section class="main-content" id="hakkimda-form">
        <div class="container">
            <h2 class="section__title title-center" data-title="Hakkımda Bilgileri">Hizmetler</h2>

            <form action="hizmetler.php" method="post">
           
                <div class="form-group">
                    <label for="isim">Başlık:</label>
                    <input type="text" id="başlık" name="başlık" required>
                </div>
                <div class="form-group">
                    <label for="aciklama">Açıklama:</label>
                    <textarea name="aciklama" id="aciklama"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="button">Kaydet</button>
                </div>
            </form>

            <?php
// Veritabanı bağlantısı
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı kontrol et
if (!$baglan) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}

// Silme işlemi için POST metoduyla gönderilen 'sil_id' parametresini kontrol et
if (isset($_POST['sil_id'])) {
    $sil_id = mysqli_real_escape_string($baglan, $_POST['sil_id']);

    // Silme sorgusu
    $sql = "DELETE FROM hizmetler WHERE id = $sil_id";

    if (mysqli_query($baglan, $sql)) {
        echo "Kayıt başarıyla silindi.";
        // Silme işleminden sonra başka bir sayfaya yönlendirme
        header("Location: hizmetler.php");
        exit(); // Yönlendirmenin ardından kodun devam etmemesi için exit() kullanılır
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }
}

// Verileri çekme sorgusu
$sql = "SELECT * FROM hizmetler";
$result = mysqli_query($baglan, $sql);

?>


            









            <h2>Hizmetler Listesi</h2>
<table class="table">
    <thead>
        <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Veritabanı bağlantısı
        $vt_sunucu = "localhost";
        $vt_kullanici = "root";
        $vt_sifre = "";
        $vt_adi = "paylastikca";

        $baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

        // Bağlantıyı kontrol et
        if (!$baglan) {
            die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
        }

        // Verileri çekme sorgusu
        $sql = "SELECT * FROM hizmetler";
        $result = mysqli_query($baglan, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["baslik"] . "</td>";
                echo "<td>" . $row["aciklama"] . "</td>";
                echo '<td>
                        <a href="hizmetler_duzenle.php?id=' . $row["id"] . '" class="btn btn-primary">Düzenle</a>
                        <form action="" method="post" style="display: inline;">
                            <input type="hidden" name="sil_id" value="' . $row["id"] . '">
                            <button type="submit" class="btn btn-danger" onclick="return confirm(\'Bu veriyi silmek istediğinize emin misiniz?\')">Sil</button>
                        </form>
                      </td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Veri bulunamadı.</td></tr>";
        }

        // Veritabanı bağlantısını kapat
        mysqli_close($baglan);
        ?>
    </tbody>
</table>


          



        </div>
    </section>
    </body>
</html>

<?php
// Veritabanı bağlantısı
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı kontrol et
if (!$baglan) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}

// Formdan gelen verileri al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = mysqli_real_escape_string($baglan, $_POST['başlık']);
    $aciklama = mysqli_real_escape_string($baglan, $_POST['aciklama']);

    // SQL sorgusu
    $sql = "INSERT INTO hizmetler (baslik, aciklama) VALUES ('$baslik', '$aciklama')";

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        echo "Yeni kayıt başarıyla eklendi.";
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>
