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
        @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Pacifico&display=swap');
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        input, textarea, button, body {
            font-family: var(--body-font);
            font-size: var(--larger-font-size);
            background-color: var(--body-color); /* Arka plan rengi */
        }

        input, textarea, button {
            outline: none;
            border: none;
            background-color: transparent;
        }

        h1, h2, h3 {
            color: var(--title-color);
            font-weight: var(--weight-600);
        }
        a {
            text-decoration: none;
        }


        .sidebar {
            position: fixed;
            width: var(--sidebar-width);
            height: 100%;
            background-color: var(--container-color);
            padding: 2rem 1rem;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
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
            row-gap: 1rem;
        }

        .sidebar__link {
            color: var(--text-color);
            font-size: var(--larger-font-size);
            transition: all .3s ease;
            padding: 0.5rem;
            border-radius: 4px;
        }

        .sidebar__link:hover {
            background-color: var(--primary-color-light);
            color: var(--primary-color);
        }

        .sidebar__link.active {
            background-color: var(--primary-color);
            color: var(--white);
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

        table td:nth-child(2) {
            max-width: 410px;
            word-wrap: break-word;
            white-space: pre-wrap;
            overflow: hidden;
            text-overflow: ellipsis;
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

    <!-- Hakkımda Bilgileri Formu -->
    <section class="main-content" id="hakkimda-form">
        <div class="container">
            <h2 class="section__title title-center" data-title="Hakkımda Bilgileri">Hakkımda Bilgileri</h2>

            <form action="hakkimda.php" method="post">
                <div class="form-group">
                    <label for="hakkimda">Hakkımda:</label>
                    <textarea id="hakkimda" name="hakkimda" placeholder="Kendinizden bahsedin..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="isim">İsim:</label>
                    <input type="text" id="isim" name="isim" required>
                </div>
                <div class="form-group">
                    <label for="ulke">Ülke:</label>
                    <input type="text" id="ulke" name="ulke" required>
                </div>
                <div class="form-group">
                    <label for="yas">Yaş:</label>
                    <input type="text" id="yas" name="yas" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="button">Kaydet</button>
                </div>
            </form>
        </div>

         <!-- Display Hakkımda Bilgileri -->
         <h2 class="section__title title-center" data-title="Hakkımda Bilgileri">Hakkımda Bilgileri Listesi</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hakkımda</th>
                        <th>İsim</th>
                        <th>Ülke</th>
                        <th>Yaş</th>
                        <th>Email</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
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

                    // Veritabanındaki verileri çek
                    $sql = "SELECT * FROM hakkimda";
                    $result = mysqli_query($baglan, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["hakkimda"] . "</td>";
                            echo "<td>" . $row["ad_soyad"] . "</td>";
                            echo "<td>" . $row["ulke"] . "</td>";
                            echo "<td>" . $row["yas"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>
                        <a href='hakkimda.php?id=" . $row['id'] . "' class='btn btn-primary'>Düzenle</a>
                      </td>";
                            echo "<td>
                            <form action='hakkimda.php' method='post'>
                                <input type='hidden' name='id' value='" . $row['id'] . "' >
                                <button type='submit' name='sil' class='btn btn-danger'>Sil</button>
                            </form>
                          </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Kayıt bulunamadı.</td></tr>";
                    }

                    // Veritabanı bağlantısını kapat
                    mysqli_close($baglan);
                    ?>
                </tbody>
            </table>
                <!-- SİL İÇİNNNN-->
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

// POST yöntemiyle gelen silme isteğini işle
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sil'])) {
    $id = mysqli_real_escape_string($baglan, $_POST['id']);

    // SQL sorgusu oluştur
    $sql = "DELETE FROM hakkimda WHERE id = $id";

    // Sorguyu çalıştır ve sonucu kontrol et
    if (mysqli_query($baglan, $sql)) {
        echo "<p>Kayıt başarıyla silindi.</p>";
        // İşlem tamamlandıktan sonra sayfayı yenile
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }
}


// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>







<!-- DÜZENLE İÇİN-->
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

// ID parametresini kontrol et
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($baglan, $_GET['id']);

    // Veritabanından ilgili kaydı seç
    $sql = "SELECT * FROM hakkimda WHERE id = $id";
    $result = mysqli_query($baglan, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Düzenleme formunu göster
        echo "<h2 class='section__title title-center' data-title='Hakkımda Bilgilerini Düzenle'>Hakkımda Bilgilerini Düzenle</h2>";
        echo "<form action='hakkimda.php' method='post'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<div class='form-group'>";
        echo "<label for='hakkimda'>Hakkımda:</label>";
        echo "<textarea id='hakkimda' name='hakkimda' required>" . $row['hakkimda'] . "</textarea>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='isim'>İsim:</label>";
        echo "<input type='text' id='isim' name='isim' value='" . $row['ad_soyad'] . "' required>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='ulke'>Ülke:</label>";
        echo "<input type='text' id='ulke' name='ulke' value='" . $row['ulke'] . "' required>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='yas'>Yaş:</label>";
        echo "<input type='text' id='yas' name='yas' value='" . $row['yas'] . "' required>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' id='email' name='email' value='" . $row['email'] . "' required>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<button type='submit' name='duzenle' class='btn btn-primary'>Kaydet</button>";
        echo "</div>";
        echo "</form>";
    } else {
        echo "Kayıt bulunamadı.";
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>
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

// POST yöntemiyle gelen düzenleme isteğini işle
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['duzenle'])) {
    $id = mysqli_real_escape_string($baglan, $_POST['id']);
    $hakkimda = mysqli_real_escape_string($baglan, $_POST['hakkimda']);
    $isim = mysqli_real_escape_string($baglan, $_POST['isim']);
    $ulke = mysqli_real_escape_string($baglan, $_POST['ulke']);
    $yas = mysqli_real_escape_string($baglan, $_POST['yas']);
    $email = mysqli_real_escape_string($baglan, $_POST['email']);

    // SQL sorgusu oluştur
    $sql = "UPDATE hakkimda SET hakkimda = '$hakkimda', ad_soyad = '$isim', ulke = '$ulke', yas = '$yas', email = '$email' WHERE id = $id";

    // Sorguyu çalıştır ve sonucu kontrol et
    if (mysqli_query($baglan, $sql)) {
        echo "<p>Kayıt başarıyla güncellendi.</p>";
        // İşlem tamamlandıktan sonra sayfayı yenile
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>

        </div>




    </section>

    </body>
</html>



<?php
// Hata raporlama
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    $hakkimda = mysqli_real_escape_string($baglan, $_POST['hakkimda']);
    $isim = mysqli_real_escape_string($baglan, $_POST['isim']);
    $ulke = mysqli_real_escape_string($baglan, $_POST['ulke']);
    $yas = mysqli_real_escape_string($baglan, $_POST['yas']);
    $email = mysqli_real_escape_string($baglan, $_POST['email']);

    // Verileri kontrol et
    if (empty($hakkimda) || empty($isim) || empty($ulke) || empty($yas) || empty($email)) {
        die("Tüm alanlar doldurulmalıdır.");
    }

    // SQL sorgusu
    $sql = "INSERT INTO hakkimda (hakkimda, ad_soyad, ulke, email, yas) 
            VALUES (?, ?, ?, ?, ?)";
    
    // Prepared statement oluştur
    $stmt = mysqli_prepare($baglan, $sql);

    // Hata kontrolü
    if ($stmt === false) {
        echo "Hata: " . mysqli_error($baglan);
    } else {
        // Parametreleri bağla
        mysqli_stmt_bind_param($stmt, "sssss", $hakkimda, $isim, $ulke, $email, $yas);
        
        // Sorguyu çalıştır
        if (mysqli_stmt_execute($stmt)) {
            // Başarılı kayıttan sonra anasayfaya yönlendir
            header("Location: index.php?kayit=basarili");
            exit(); // Script'in daha fazla çalışmasını engeller
        } else {
            echo "Hata: " . mysqli_stmt_error($stmt);
        }
    }
    
    // Prepared statement'i kapat
    mysqli_stmt_close($stmt);
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);


header("Location: hakkimda.php");
exit(); // Yönlendirmenin ardından kodun devam etmemesi için exit() kullanılır
?>

