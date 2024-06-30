
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

// Yetenek Ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $y_adi = mysqli_real_escape_string($baglan, $_POST['skill_name']);
    $y_orani = mysqli_real_escape_string($baglan, $_POST['success_rate']);
    $y_aciklama = mysqli_real_escape_string($baglan, $_POST['skill_description']);

    // SQL sorgusu
    $sql = "INSERT INTO yetenekler (y_adi, y_orani, y_aciklama) 
            VALUES ('$y_adi', '$y_orani', '$y_aciklama')";

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        // Başarılı kayıttan sonra aynı sayfaya yönlendir
        header("Location: yetenekler.php?kayit=basarili");
        exit(); // Script'in daha fazla çalışmasını engeller
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }
}

// Yetenek Silme işlemi
if (isset($_GET['sil'])) {
    $id = $_GET['sil'];

    $sil_sql = "DELETE FROM yetenekler WHERE y_id=$id";

    if (mysqli_query($baglan, $sil_sql)) {
        header("Location: yetenekler.php?kayit=silindi");
        exit(); // Script'in daha fazla çalışmasını engeller
    } else {
        echo "Hata: " . $sil_sql . "<br>" . mysqli_error($baglan);
    }
}

// Veritabanından tüm yetenekleri al
$sec_sql = "SELECT * FROM yetenekler";
$sonuc = mysqli_query($baglan, $sec_sql);

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

        .container {

            margin-left: var(--sidebar-width);
            padding: 3rem;
            overflow-y: auto;
            background-color: var(--body-color);
        }
        


        .container h2 {
            margin-bottom: 1.5rem;
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

        
        
        input[type="submit"] {
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
        input[type="submit"]:hover {
            background-color: var(--primary-color-dark);
        }


        table {
         
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
    <div class="container">
        <h1>Yetenek Ekle</h1>
        <form action="yetenekler.php" method="post">
            <div class="form-group">
                <label for="skill_name">Yetenek Adı:</label>
                <input type="text" id="skill_name" name="skill_name" required>
            </div>
            
            <div class="form-group">
                <label for="success_rate">Başarı Oranı (%):</label>
                <input type="number" id="success_rate" name="success_rate" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="skill_description">Yetenek Açıklaması:</label>
                <textarea id="skill_description" name="skill_description" rows="4" required></textarea>
            </div>
           
                <input type="submit" value="Yetenek Ekle">
                <br><br><br><br>
            
        </form>


       <!-- Yetenekler Tablosu -->
    <?php
    if (mysqli_num_rows($sonuc) > 0) {
        echo "<h1>Mevcut Yetenekler</h1>";
        echo "<table>";
        echo "<tr><th>Yetenek Adı</th><th>Başarı Oranı (%)</th><th>Açıklama</th><th>İşlemler</th></tr>";
        while ($row = mysqli_fetch_assoc($sonuc)) {
            echo "<tr>";
            echo "<td>" . $row['y_adi'] . "</td>";
            echo "<td>" . $row['y_orani'] . "</td>";
            echo "<td>" . $row['y_aciklama'] . "</td>";
            echo "<td>";
            echo "<a href='yetenek_guncelle.php?id=" . $row['y_id'] . "'>Güncelle</a> | ";
            echo "<a href='yetenekler.php?sil=" . $row['y_id'] . "' onclick=\"return confirm('Bu yeteneği silmek istediğinizden emin misiniz?');\">Sil</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Henüz hiç yetenek eklenmemiş.</p>";
    }
    ?>
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
    $y_adi = mysqli_real_escape_string($baglan, $_POST['skill_name']);
    $y_orani = mysqli_real_escape_string($baglan, $_POST['success_rate']);
    $y_aciklama = mysqli_real_escape_string($baglan, $_POST['skill_description']);

    // SQL sorgusu
    $sql = "INSERT INTO yetenekler (y_adi, y_orani, y_aciklama) 
            VALUES ('$y_adi', '$y_orani', '$y_aciklama')";

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        // Başarılı kayıttan sonra aynı sayfaya yönlendir
        header("Location: yetenekler.php?kayit=basarili");
        exit(); // Script'in daha fazla çalışmasını engeller
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>













