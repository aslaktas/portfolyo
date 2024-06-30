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
    $name = mysqli_real_escape_string($baglan, $_POST['name']);
    $location = mysqli_real_escape_string($baglan, $_POST['location']);
    $testimonial = mysqli_real_escape_string($baglan, $_POST['testimonial']);

    // SQL sorgusu
    $sql = "INSERT INTO referanslar (ad_soyad, sehir, yorum) VALUES ('$name', '$location', '$testimonial')";

    // Sorguyu çalıştır
    if (mysqli_query($baglan, $sql)) {
        echo "Yeni referans başarıyla eklendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }

    // Formun yeniden gönderilmesini önlemek için
    header("Location: referanslar.php"); // Aynı sayfaya yönlendir
    exit(); // Script'in daha fazla çalışmasını engeller
}
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

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }

        .section__title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--title-color);
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
            font-size: 1rem;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            transition: border-color 0.3s ease;
            background-color: var(--container-color);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
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
    

<!-- Main Content -->
<main class="main-content">
    <section class="references">
        <h2 class="section__title">Referansları Düzenle</h2>
        <form action="referanslar.php" method="post">
            <div class="form-group">
                <label for="name">Adı Soyadı</label>
                <input type="text" id="name" name="name" placeholder="Adı Soyadı" required>
            </div>
            <div class="form-group">
                <label for="location">Yaşadığı Şehir</label>
                <input type="text" id="location" name="location" placeholder="Yaşadığı Şehir" required>
            </div>
            <div class="form-group">
                <label for="testimonial">Hakkında Ne Diyorlar?</label>
                <textarea id="testimonial" name="testimonial" placeholder="Hakkında Ne Diyorlar?" required></textarea>
            </div>
            <button type="submit" class="btn">Kaydet</button>
        </form>

        <?php
        // Veritabanındaki verileri seç
        $sql = "SELECT * FROM referanslar";
        $result = mysqli_query($baglan, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Adı Soyadı</th><th>Yaşadığı Şehir</th><th>Hakkında Ne Diyorlar?</th><th>Güncelle</th><th>Sil</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ad_soyad'] . "</td>";
                echo "<td>" . $row['sehir'] . "</td>";
                echo "<td>" . $row['yorum'] . "</td>";
                echo "<td><form action='update.php' method='post '><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit'>Güncelle</button></form></td>";
                echo "<td><form action='delete.php' method='post'><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit'>Sil</button></form></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Veritabanında kayıt bulunamadı.";
        }

        // Veritabanı bağlantısını kapat
        mysqli_close($baglan);
        ?>
    </section>
</main>



</body>

</html>
