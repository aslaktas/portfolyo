
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
            background-color: var(--body-color);
        }

        main {
            background-color: var(--body-color);
            color: var(--text-color);
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

        ul {
            list-style: none;
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
            overflow-y: auto;
            background-color: var(--body-color);
        }
        .proje_düzenle {
           
            padding: 2rem;
            overflow-y: auto;
            background-color: var(--body-color);
        }


        .main-content h2 {
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
            background-color: var(--primary-color-dark);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
    </style>
</head>
<body>
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
         
    </aside>

    <div class="main-content">
    <h2>Yeni Proje Ekle</h2>
    <form action="projelerim.php" method="post" enctype="multipart/form-data" style="padding-bottom: 50px;">
    <div class="form-group">
        <label for="proje_adi">Proje Adı:</label>
        <input type="text" id="proje_adi" name="proje_adi" required />
    </div>
    <div class="form-group">
        <label for="aciklama">Açıklama:</label>
        <textarea id="aciklama" name="aciklama" required></textarea>
    </div>
    <div class="form-group">
        <label for="projeResim">Proje Resmi Seç:</label>
        <input type="file" id="projeResim" name="projeResim" accept="image/*" required />
    </div>
    <button type="submit">Proje Ekle</button>
</form>
<hr>

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

// Projeleri seçme sorgusu
$sql = "SELECT * FROM projeler";
$sonuc = mysqli_query($baglan, $sql);

if (mysqli_num_rows($sonuc) > 0) {
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Proje Adı</th>';
echo '<th>Açıklama</th>';
echo '<th>Resim</th>';
echo '<th>İşlemler</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($satir = mysqli_fetch_assoc($sonuc)) {
echo '<tr>';
echo '<td>' . $satir['p_adı'] . '</td>';
echo '<td>' . $satir['p_aciklama'] . '</td>';
echo '<td><img src="assets/img/' . $satir['p_resim'] . '" width="50" height="50"></td>';
echo '<td>';
echo '<a href="' . $satir['p_id'] . '" class="btn btn-primary">Düzenle</a>';
echo '<a href="delete.php' . $satir['p_id'] . '" class="btn btn-danger">Sil</a>';
echo '</td>';
echo '</tr>';
}
echo '</tbody>';
echo '</table>';
} else {
echo "Herhangi bir proje bulunamadı.";
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>


    </div>

    


</body>
</html>
















<?php
        
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

// Veritabanına bağlantı oluşturma
$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı kontrol etme
if (!$baglan) {
    die("Veritabanı bağlama işlemi başarısız: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $proje_adi = mysqli_real_escape_string($baglan, $_POST['proje_adi']);
    $aciklama = mysqli_real_escape_string($baglan, $_POST['aciklama']);

    // Dosya yükleme işlemi
    $uploads_dir = 'assets/img/';
    $tmp_name = $_FILES["projeResim"]["tmp_name"];
    $name = basename($_FILES["projeResim"]["name"]);
    $upload_path = "$uploads_dir/$name";

    if (move_uploaded_file($tmp_name, $upload_path)) {
        // Dosya yolu veritabanına kaydetme
        $projeResim = mysqli_real_escape_string($baglan, $upload_path);

        // Veritabanına veri ekleme
        $sql = "INSERT INTO projeler (p_adı, p_aciklama, p_resim) VALUES ('$proje_adi', '$aciklama', '$projeResim')";

        if (mysqli_query($baglan, $sql)) {
            echo "Yeni kayıt başarıyla oluşturuldu";
        } else {
            echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
        }
    } else {
        echo "Dosya yüklenirken bir hata oluştu.";
    }

    mysqli_close($baglan);
} else {
    echo "Lütfen tüm alanları doldurun.";
}
?>



<?php

$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "paylastikca";

// Veritabanına bağlantı oluşturma
$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı kontrol etme
if (!$baglan) {
    die("Veritabanı bağlama işlemi başarısız: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $proje_adi = mysqli_real_escape_string($baglan, $_POST['proje_adi']);
    $aciklama = mysqli_real_escape_string($baglan, $_POST['aciklama']);

    // Dosya yükleme işlemi
    $uploads_dir = 'uploaded_images/';
    $tmp_name = $_FILES["projeResim"]["tmp_name"];
    $name = basename($_FILES["projeResim"]["name"]);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
    $projeResim = "$name";

    // Veritabanına veri ekleme
    $sql = "INSERT INTO projeler (p_adı, p_aciklama, p_resim) VALUES ('$proje_adi', '$aciklama', '$projeResim')";

    if (mysqli_query($baglan, $sql)) {
        echo "Yeni kayıt başarıyla oluşturuldu";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }

    mysqli_close($baglan);
}



?> 

    


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

// Formdan gelen verileri al
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["kaydet"])) {
    $proje_adi = mysqli_real_escape_string($baglan, $_POST["kaydet"]);
    $aciklama = mysqli_real_escape_string($baglan, $_POST["aciklama"]);

    // Veritabanında güncelleme işlemi
    $sql = "UPDATE projeler SET p_aciklama='$aciklama' WHERE p_adı='$proje_adi'";

    if (mysqli_query($baglan, $sql)) {
        echo "Proje güncellendi: " . $proje_adi;
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>


