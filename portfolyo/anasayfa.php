<?php
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

// Veritabanı bağlantısı
$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı kontrol et
if (!$baglan) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}

// Veri ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST['baslik'];
    $hakkimda = $_POST['hakkimda'];

    // Veriyi ekleme sorgusu
    $ekle_sql = "INSERT INTO anasayfa (baslik, hakkimda) VALUES ('$baslik', '$hakkimda')";

    if (mysqli_query($baglan, $ekle_sql)) {
        echo '<div class="alert alert-success" role="alert">Veri başarıyla eklendi.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Ekleme işlemi başarısız: ' . mysqli_error($baglan) . '</div>';
    }
}

// Verileri çekme sorgusu
$liste_sql = "SELECT * FROM anasayfa ORDER BY id DESC";
$result = mysqli_query($baglan, $liste_sql);

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
            margin-top:1.5rem;
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
            font-size: 20px;
            

            
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
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
        <form action="anasayfa.php" method="post">
            <div class="form-group">
                <label for="baslik">Başlık:</label>
                <input type="text" id="baslik" name="baslik" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hakkimda">Hakkımda:</label>
                <textarea id="hakkimda" name="hakkimda" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="button">Kaydet</button>
            </div>
       

        </form>


        <table class="table">
            <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Hakkımda</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["baslik"] . "</td>";
                        echo "<td>" . $row["hakkimda"] . "</td>";
                        echo '<td>
                                <a href="duzenle.php?id=' . $row["id"] . '">Düzenle</a> |
                                <a href="anasayfa.php?sil=' . $row["id"] . '" onclick="return confirm(\'Bu veriyi silmek istediğinize emin misiniz?\')">Sil</a>
                              </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Veri bulunamadı.</td></tr>";
                }
                ?>
            </tbody>
        </table>
       



    </main>



    











</body>