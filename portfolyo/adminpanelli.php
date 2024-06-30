
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Uygulaması</title>
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
        body {
            background-image: url(web-admin-panel/image/adminpanelli.jpg);
            justify-content: center;
            background-repeat: no-repeat;
            background-size: cover; /* Arka plan resmini tam olarak sığdırır */
            background-position: center; /* Resmi ortalar */
            
        }
        .profile-icon {
            font-size: 50px;
            color: #333; /* Simgenin rengini değiştirir */
            margin-bottom: 25px;
        }
        .anapanel {
            width: 25%;
            border-radius: 50px;
            height: 80%;
            margin-top: 80px;
            background-color: #eee9e9
        }
        a {
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            margin-bottom:5px;
        }
        a:hover{
            text-decoration: none;
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    

    <!-- Page Content -->
    <div style="width:25%; margin-left:auto; margin-right:auto;">

        <div class="w3-sidebar w3-bar-block anapanel">
            <h3 class="w3-bar-item mt-5" style="font-family: 'Dancing Script', cursive; font-family: 'Pacifico', cursive; text-align: center; font-size: 30px;">
                <i class="bi bi-person profile-icon"></i> <br /> Admin Panel</h3>
            <hr />
 
                <a href="anasayfa.php" class="w3-bar w3-button btn-warning">Anasayfa</a>
                <a href="hakkimda.php" class="w3-bar w3-button btn-secondary">Hakkımda</a>
                <a href="egitim.php" class="w3-bar w3-button btn-secondary">Eğitim & Deneyim</a>
                <a href=""class="w3-bar w3-button btn-secondary">Hizmetler</a>
                <a href="yetenekler.php"class="w3-bar w3-button btn-secondary">Yetenekler</a>
                <a href="projelerim.php" class="w3-bar w3-button btn-secondary">Portfolyo</a>
                <a href="referanslar.php"  class="w3-bar w3-button btn-secondary">Referanslar</a>
                <a href="iletisim.php"  class="w3-bar w3-button btn-secondary">İletişim</a>
                <a href="login.php" class="w3-bar w3-button btn-danger">Çıkış Yap</a>

        </div>
    </div>

</body>
</html>
