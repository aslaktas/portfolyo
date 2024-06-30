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
            margin-left: var(--sidebar-width);
            /* Sol boşluk */
            padding: 2rem;
            /* Dolgu */
            background-color: var(--body-color);
            /* Arka plan rengi */
        }

        .content {
            margin-top: 1rem;
            /* Üst boşluk */
            margin-bottom: 0px;
        }

        .iletişim {
            margin-top: 3rem;
            /* Üst boşluk */
            margin-bottom: 2px;
            margin-left: var(--sidebar-width);
            /* Sol boşluk */
            padding: 30px;
            background-color: var(--container-color);
            /* Arka plan rengi */

        }

        h1 {
            color: var(--primary-color);
            /* Başlık rengi */
        }

        .form-group {
            margin-bottom: 1rem;
            /* Alt boşluk */
        }

        .form-group label {
            display: block;
            /* Blok gösterim */
            margin-bottom: 0.5rem;
            /* Alt boşluk */
            color: var(--text-color);
            /* Renk */
        }

        .form-group input {
            width: 100%;
            /* Genişlik */
            padding: 0.5rem;
            /* Dolgu */
            border: 1px solid var(--border-color);
            /* Kenarlık */
            border-radius: 4px;
            /* Kenar yuvarlama */
            background-color: var(--body-color);
            /* Arka plan rengi */
            color: var(--text-color);
            /* Renk */
        }

        .form-group input::placeholder {
            color: var(--text-color);
            /* Placeholder rengi */
        }

        button {
            display: inline-block;
            /* Blok içi gösterim */
            padding: 0.75rem 1.5rem;
            /* Dolgu */
            border: none;
            /* Sınır kaldırma */
            border-radius: 4px;
            /* Kenar yuvarlama */
            background-color: var(--primary-color);
            /* Arka plan rengi */
            color: var(--white);
            /* Renk */
            font-size: var(--larger-font-size);
            /* Font boyutu */
            cursor: pointer;
            /* İmleç */
            transition: background-color 0.3s ease;
            /* Geçiş efekti */
        }

        button:hover {
            background-color: var(--primary-color-dark);
            /* Arka plan rengi */
        }

        .message-section {
            /* Üst boşluk */
            padding: 2rem;
            /* Dolgu */
            background-color: var(--body-color);
            /* Arka plan rengi */

        }

        .message-section p {
            color: var(--text-color);
            /* Renk */
        }

        /* Mesaj tablosu stili */
        table {
            width: 100%;
            /* Genişlik */
            border-collapse: collapse;
            /* Kenarlık birleştirme */
        }

        table th,
        table td {
            padding: 1rem;
            /* Dolgu */
            border: 1px solid var(--border-color);
            /* Kenarlık */
            text-align: left;
            /* Metin hizalama */
        }

        table th {
            background-color: var(--primary-color-light);
            /* Arka plan rengi */
            color: var(--title-color);
            /* Renk */
        }

        table td {
            background-color: var(--white);
            /* Arka plan rengi */
            color: var(--text-color);
            /* Renk */
        }

        table td:nth-child(4) {
            max-width: 400px;
            /* Mesaj sütununun maksimum genişliği */
            word-wrap: break-word;
            /* Uzun metinlerin otomatik olarak alt satırlara kayması */
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

    <!-- Ana içerik -->

    <!-- Gönderilen Mesajlar -->
    <div class="main-content message-section">
        <header>
            <h1>Gelen Mesajlar</h1>
        </header>
        <div class="content">
            <p>
                <?php
                include("baglanti.php");

                $sec = "SELECT * FROM iletisim";
                $sonuc = $baglan->query($sec);

                if ($sonuc->num_rows > 0) {
                    echo "<table>
                            <tr>
                                <th>İsim</th>
                                <th>Soyisim</th>
                                <th>Konu</th>
                                <th>Mesaj</th>
                            </tr>";
                    while ($cek = $sonuc->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>" . $cek['isim'] . "</td>
                            <td>" . $cek['soyisim'] . "</td>
                            <td>" . $cek['konu'] . "</td>
                            <td>" . $cek['mesaj'] . "</td>
                        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                }
                ?>
            </p>

        </div>

    </div>



    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <div class="iletişim">
        <form action="iletisim.php" method="post">
            <h2>İletişim Bilgileri</h2>
            <div class="form-group">
                <label for="telefon">Telefon:</label>
                <input type="tel" name="telefon" id="telefon" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="adres">Adres:</label>
                <input type="text" id="adres" name="adres" required>
            </div>
            <div class="form-group">
                <button type="submit" class="button">Kaydet</button>
            </div>
        </form>
    </div>




</body>

</html>

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

// Form verilerini kaydetme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefon = mysqli_real_escape_string($baglan, $_POST['telefon']);
    $email = mysqli_real_escape_string($baglan, $_POST['email']);
    $adres = mysqli_real_escape_string($baglan, $_POST['adres']);

    // SQL sorgusu
    $sql = "INSERT INTO adres (telefon, email, adres) VALUES ('$telefon', '$email', '$adres')";

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        // Başarılı kayıttan sonra aynı sayfaya yönlendir
        header("Location: hakkimda.php?kayit=basarili");
        exit(); // Script'in daha fazla çalışmasını engeller
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }
}



// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>