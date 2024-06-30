<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Aslınur Aktaş Portfolyo </title>
</head>
<body>
    <!--==================== STYLE SWİTCHER ====================-->
<input type="radio" name="color" id="color-1">
<input type="radio" name="color" id="color-2">
<input type="radio" name="color" id="color-3">
<input type="radio" name="color" id="color-4">
<input type="radio" name="color" id="color-5">
<input type="radio" name="color" id="color-6">
<input type="radio" name="color" id="color-7">
<input type="radio" name="color" id="color-8">
<input type="radio" name="color" id="color-9">
<input type="radio" name="color" id="color-10">
<input type="checkbox" id="toggler">
<input type="checkbox" id="day-night">

<div class="style__switcher">
    <label for="toggler" class="style__switcher-toggler">
        <i class="fa-solid fa-gear fa-spin"></i>
    </label>

    <label for="day-night" class="style__switcher-theme">
        <i class="fa-solid fa-sun"></i>
        <i class="fa-solid fa-moon"></i>
    </label>
    <he class="style__switcher-title">Tema Rengi</he>
    <div class="style__switcher-colors">
        <label for="color-1" class="color-1 color"></label>
        <label for="color-2" class="color-2 color"></label>
        <label for="color-3" class="color-3 color"></label>
        <label for="color-4" class="color-4 color"></label>
        <label for="color-5" class="color-5 color"></label>
        <label for="color-6" class="color-6 color"></label>
        <label for="color-7" class="color-7 color"></label>
        <label for="color-8" class="color-8 color"></label>
        <label for="color-9" class="color-9 color"></label>
        <label for="color-10" class="color-10 color"></label>
    </div>
</div>

    
    <!--==================== HEADER ====================-->
    <header class="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">ASLINUR AKTAŞ</a>

            <input type="checkbox" id="nav-toggler">
            <label for="nav-toggler" class="nav__toggle">
                <i class="fa-solid fa-bars"></i>
            </label>

            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Anasayfa</a> 
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">Hakkımda</a>
                </li>

                <li class="nav__item">
                    <a href="#qualification" class="nav__link">Deneyim</a>
                </li>
                <li class="nav__item">
                    <a href="#services" class="nav__link">Hizmetler</a>
                </li>

                <li class="nav__item">
                    <a href="#works" class="nav__link">Portfolyo</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">İletişim</a>
                </li>

            </ul>

           

        </nav>
    </header>
    
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paylastikca";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Veritabanından verileri çekme
$sql = "SELECT * FROM anasayfa";
$result = $conn->query($sql);

// Eğer veri varsa, verileri kullan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $baslik = $row['baslik'];
    $hakkimda = $row['hakkimda'];
} else {
    $baslik = "Başlık bulunamadı";
    $hakkimda = "Hakkımda bilgisi bulunamadı";
}

// Bağlantıyı kapat
$conn->close();
?>

<main class="main-content">
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__content">
                    <span class="home__small">Merhaba</span>
                    <h1 class="home__title">
                        <span>Ben</span>
                        Aslınur <br> 
                        <span><?php echo htmlspecialchars($baslik); ?></span>
                    </h1>
                    <p class="home__description">
                        <?php echo nl2br(htmlspecialchars($hakkimda)); ?>
                    </p>
                    <div class="home__btns">
                        <a href="#contact" class="btn">İletişim</a>
                        <a href="#works" class="btn btn--transparent">Portfolyo</a>
                    </div>
                </div>
                <div class="home__img-wrapper">
                    <img src="assets/img/profilee.png" alt="" class="home__img">
                </div>
            </div>
        </section>
    </main>

    






       
  
        <!--==================== ABOUT ====================-->
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

// Veritabanından verileri çek
$sql = "SELECT * FROM hakkimda ORDER BY id DESC LIMIT 1"; // En son eklenen veriyi alıyoruz
$result = mysqli_query($baglan, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    $row = null;
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>

        <section class="about" id="about">
    <div class="about__container container grid">
        <div class="about__img-wrapper">
            <img src="assets/img/ben.jpg" alt="" class="about__img"/>
            <img src="assets/img/ben.jpg" alt="" class="about__img"/>
            <img src="assets/img/ben.jpg" alt="" class="about__img"/>
            <img src="assets/img/ben.jpg" alt="" class="about__img"/>
        </div>
        <div class="about__content">
            <h2 class="section__title" data-title="Beni tanı">
                <?php if ($row): ?>
                    Ben <?php echo htmlspecialchars($row['ad_soyad']) . ", yazılım mühendisi öğrencisiyim."; ?>
                <?php else: ?>
                    <!-- Eğer veritabanından veri alınamazsa burayı boş bırakabilirsiniz veya bir uyarı mesajı koyabilirsiniz -->
                    Bilgiler alınamadı.
                <?php endif; ?>
            </h2>
            <p class="about__description">
                <?php if ($row): ?>
                    <?php echo htmlspecialchars($row['hakkimda']); ?>
                <?php endif; ?>
            </p>
            <ul class="about__data grid">
                <li class="data__item">
                    <h3 class="data__title">İsim:</h3>
                    <span class="data__description">
                        <?php echo $row ? htmlspecialchars($row['ad_soyad']) : ""; ?>
                    </span>
                </li>
                <li class="data__item">
                    <h3 class="data__title">Yaş: </h3>
                    <span class="data__description">
                        <?php echo $row ? htmlspecialchars($row['yas']) : ""; ?>
                    </span>
                </li>
                <li class="data__item">
                    <h3 class="data__title">Ülke: </h3>
                    <span class="data__description">
                        <?php echo $row ? htmlspecialchars($row['ulke']) : ""; ?>
                    </span>
                </li>
                <li class="data__item">
                    <h3 class="data__title">Email:</h3>
                    <span class="data__description about__link">
  <?php if ($row): ?>
    <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>">
      <?php echo htmlspecialchars($row['email']); ?>
    </a>
  <?php endif; ?>
</span>
                </li>
            </ul>
            <div class="about__bottom">
                <a href="" class="btn">Cv İndir</a>
                <div class="about__social-links">
                    <a href="" class="about__social-link">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" class="about__social-link">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="" class="about__social-link">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="" class="about__social-link">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/aslaktas" class="about__social-link">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

  
        <!--==================== QUALIFICATION ====================-->
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

// Eğitim verilerini çek
$egitim_sorgu = "SELECT * FROM egitim";
$egitim_sonuc = mysqli_query($baglan, $egitim_sorgu);

// Deneyim verilerini çek
$deneyim_sorgu = "SELECT * FROM deneyim";
$deneyim_sonuc = mysqli_query($baglan, $deneyim_sorgu);
?>

        <section class="qualification section" id="qualification">
        <h2 class="section__title title-center" data-title="Kariyer Yolculuğum">Eğitim & Deneyim</h2>
        <div class="resume__container container grid">
            <div class="resume__group">
                <h3 class="resume__heading">Eğitim</h3>
                <div class="resume__items">
                    <?php
                    if (mysqli_num_rows($egitim_sonuc) > 0) {
                        while ($egitim = mysqli_fetch_assoc($egitim_sonuc)) {
                            echo '<div class="resume__item">';
                            echo '<div class="resume__header">';
                            echo '<h3 class="resume__subtitle">' . $egitim['okul_adi'] . '</h3>';
                            echo '<span class="resume__icon">+</span>';
                            echo '</div>';
                            echo '<div class="resume__content">';
                            echo '<div class="resume__date-title">';
                            echo '<h3 class="resume__title">' . $egitim['okul_bölüm'] . '</h3>';
                            echo '<span class="resume__date">' . $egitim['okul_tarih'] . '</span>';
                            echo '</div>';
                            echo '<p class="resume__description">' . $egitim['okul_aciklama'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>Henüz eğitim bilgisi eklenmedi.</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="resume__group">
                <h3 class="resume__heading">Deneyim</h3>
                <div class="resume__items">
                    <?php
                    if (mysqli_num_rows($deneyim_sonuc) > 0) {
                        while ($deneyim = mysqli_fetch_assoc($deneyim_sonuc)) {
                            echo '<div class="resume__item">';
                            echo '<div class="resume__header">';
                            echo '<h3 class="resume__subtitle">' . $deneyim['sirket_adi'] . '</h3>';
                            echo '<span class="resume__icon">+</span>';
                            echo '</div>';
                            echo '<div class="resume__content">';
                            echo '<div class="resume__date-title">';
                            echo '<h3 class="resume__title">' . $deneyim['sirket_pozisyon'] . '</h3>';
                            echo '<span class="resume__date">' . $deneyim['sirket_tarih'] . '</span>';
                            echo '</div>';
                            echo '<p class="resume__description">' . $deneyim['sirket_aciklama'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>Henüz deneyim bilgisi eklenmedi.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>

       
  
        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title title-center" data-title="Hizmetler">Neler Yaptım?</h2> 
            <div class="services__container container grid">

                <div class="services__item"> 
                    <i class="fa-solid fa-pen-to-square services__icon"></i>
                    <h3 class="services__title">
                        UI/UX Tasarım
                    </h3>
                    <p class="services__description"> Kullanıcı ihtiyaçlarını ve geri bildirimlerini dikkate alarak, sürekli olarak tasarım süreçlerimi iyileştiriyor ve projelerime yenilikçi çözümler ekliyorum.</p>
                    <span class="services__no">01</span>
                </div>
                <div class="services__item">
                    <i class="fa-solid fa-laptop services__icon"></i>
                    <h3 class="services__title">
                        Web Geliştirme
                    </h3>
                    <p class="services__description">HTML, CSS, JavaScript ve çeşitli web geliştirme çerçeveleri kullanarak dinamik ve kullanıcı dostu web siteleri oluşturuyorum. </p>
                    <span class="services__no">02</span>
                </div>
                <div class="services__item">
                    <i class="fa-solid fa-chart-area services__icon"></i>
                    <h3 class="services__title">
                        Araştırma & Analiz
                    </h3>
                    <p class="services__description">Veri toplama, değerlendirme ve yorumlama süreçlerinde titizlikle çalışıyorum. Bu süreçler, projelerimin daha sağlam temellere dayanmasını ve stratejik kararlar almamı sağlıyor. </p>
                    <span class="services__no">03</span>
                </div>
                <div class="services__item">
                    <i class="fa-solid fa-pen-to-square services__icon"></i>
                    <h3 class="services__title">
                        Android Uygulama Geliştirme
                    </h3>
                    <p class="services__description"> Kotlin'in esnekliği ve güvenliği sayesinde hızlı ve etkili çözümler üretmeye odaklandım. Bu projeler, mobil uygulama geliştirme alanındaki yetkinliklerimi ve teknik bilgilerimi derinleştirmeme yardımcı oldu.</p>
                    <span class="services__no">04</span>
                </div>
                <div class="services__item">
                    <i class="fa-solid fa-laptop services__icon"></i>
                    <h3 class="services__title">
                        İOS Uygulama Geliştirme
                    </h3>
                    <p class="services__description">Projelerimde iOS'un güçlü SDK'larını ve modern teknolojilerini kullanarak kullanıcı dostu ve performansı yüksek uygulamalar geliştirdim. Bu süreç, Swift dilindeki yetkinliğimi artırmamı sağladı </p>
                    <span class="services__no">05</span>
                </div>
                <div class="services__item">
                    <i class="fa-solid fa-chart-area services__icon"></i>
                    <h3 class="services__title">
                        Araştırma & Analiz
                    </h3>
                    <p class="services__description">
                    Araştırma ve analiz sürecimde derinlemesine inceleme ve veri odaklı yaklaşımım, karmaşık problemleri anlamamı ve etkili çözümler geliştirmemi sağlıyor. Verileri titizlikle değerlendirerek, karar verme süreçlerinde sağlam temellere dayanan öneriler sunuyorum. 
                    </p>
                    <span class="services__no">06</span>
                </div>


            </div>
        </section>

  
        <!--==================== SKILLS ====================-->
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

// Yetenekler tablosundan verileri çek
$sql = "SELECT * FROM yetenekler";
$sonuc = mysqli_query($baglan, $sql);
$yetenekler = [];

if (mysqli_num_rows($sonuc) > 0) {
    while ($row = mysqli_fetch_assoc($sonuc)) {
        $yetenekler[] = $row;
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>
<section class="skills section">
        <section class="services section" id="services">
            <h2 class="section__title title-center" data-title="Yetenekler">Alanlar</h2> 
            <div class="skills__container container grid">
                <?php foreach ($yetenekler as $yetenek) : ?>
                    <div class="skills__item">
                        <div class="skills__titles">
                            <h3 class="skills__name"><?php echo htmlspecialchars($yetenek['y_adi']); ?></h3>
                            <span class="skills__no"><?php echo htmlspecialchars($yetenek['y_orani']); ?>%</span>
                        </div>
                        <p class="skills__description"><?php echo htmlspecialchars($yetenek['y_aciklama']); ?></p>
                        <div class="skills__bar">
                            <div class="skills__percentage" style="width: <?php echo htmlspecialchars($yetenek['y_orani']); ?>%">
                                <span></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </section>












         
  
        
        <!--==================== PORTFOLIO ====================-->
        <section class="works section" id="works">
    <h2 class="section__title title-center" data-title="Portfolyo">Çalışmalarım</h2>

    <div class="work__container container grid">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        // Veritabanı bağlantısı
        $vt_sunucu = "localhost";
        $vt_kullanici = "root";
        $vt_sifre = "";
        $vt_adi = "paylastikca";

        try {
            // Veritabanına bağlantı oluşturma
            $baglan = new mysqli($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

            // Bağlantıyı kontrol etme
            if ($baglan->connect_error) {
                throw new Exception("Veritabanı bağlama işlemi başarısız: " . $baglan->connect_error);
            }

            // Veritabanından projeleri çekme
            $sql = "SELECT p_adı, p_aciklama, p_resim FROM projeler";
            $result = $baglan->query($sql);

            // Sorgu hatası kontrolü
            if (!$result) {
                throw new Exception("Veritabanından veri çekme hatası: " . $baglan->error);
            }

            // Veritabanından dönen satır sayısını kontrol etme
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $proje_adi = htmlspecialchars($row['p_adı']);
                    $aciklama = htmlspecialchars($row['p_aciklama']);
                    $proje_resim = htmlspecialchars($row['p_resim']);
        ?>
                    <div class="work__card">
                        <img src=" assets/img/<?php echo $proje_resim; ?>" alt="<?php echo $proje_adi; ?>" class="work__img"/>
                        <div class="work__details">
                            <h3 class="work__title"><?php echo $proje_adi; ?></h3>
                            <span class="work__description"><?php echo $aciklama; ?></span>
                        </div>
                    </div>
        <?php
                }
            } else {
                echo "Henüz proje eklenmemiş.";
            }

            // Veritabanı bağlantısını kapatma
            $baglan->close();

        } catch (Exception $e) {
            echo "Hata oluştu: " . $e->getMessage();
        }
        ?>
    </div>
</section>

      


        


       
        <!--==================== TESTIMONIALS ====================-->
        <section class="testimonials">
        <h2 class="section__title title-center" data-title="Referanslar">Hakkımda ne diyorlar?</h2>  
        <div class="testimonials__container container grid">
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

            // SQL sorgusu
            $sql = "SELECT ad_soyad, sehir, yorum FROM referanslar";
            $result = mysqli_query($baglan, $sql);

            // Veritabanından gelen verileri döngü ile alıp HTML içine ekleyelim
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="testimonials__item">
                            <p class="testimonials__description">' . htmlspecialchars($row['yorum']) . '</p>
                            <div class="testimonials__data">
                                <div>
                                    <h3 class="testimonials__name">' . htmlspecialchars($row['ad_soyad']) . '</h3>
                                    <span class="testimonials__identity">' . htmlspecialchars($row['sehir']) . '</span>
                                </div>
                            </div>
                        </div>
                    ';
                }
            } else {
                echo "Henüz referans bulunmamaktadır.";
            }

            // Veritabanı bağlantısını kapat
            mysqli_close($baglan);
            ?>
        </div>
    </section>
 
  
        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title title-center" data-title="Bana Ulaşın">İletişim</h2> 
            <div class="contact__container container grid">
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

// Veritabanından verileri çekme
$adres_sorgu = "SELECT * FROM adres ORDER BY id DESC LIMIT 1"; // En son eklenen kaydı al
$adres_sonuc = mysqli_query($baglan, $adres_sorgu);
$adres_veri = mysqli_fetch_assoc($adres_sonuc);

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>

<div class="contact__details">
        <div class="contact__item">
            <i class="fa-solid fa-phone contact__icon"></i>
            <div>
                <h3 class="contact__title">Telefon</h3>
                <span class="contact__data">
                    <?php echo htmlspecialchars($adres_veri['telefon']); ?>
                </span>
            </div>
        </div>
        <div class="contact__item">
            <i class="fa-solid fa-envelope contact__icon"></i>
            <div>
                <h3 class="contact__title">Email</h3>
                <span class="contact__data">
                    <a href="mailto:<?php echo htmlspecialchars($adres_veri['email']); ?>">
                        <?php echo htmlspecialchars($adres_veri['email']); ?>
                    </a>
                </span>
            </div>
        </div>
        <div class="contact__item">
            <i class="fa-solid fa-location-dot contact__icon"></i>
            <div>
                <h3 class="contact__title">Adres</h3>
                <span class="contact__data">
                    <?php echo htmlspecialchars($adres_veri['adres']); ?>
                </span>
            </div>
        </div>
    </div>























                

                <form action="index.php" method="post" class="contact__form">
                    <div class="form__group">
                        <div class="form__input">
                            <input type="text" 
                            placeholder="İsim" 
                            name="isim"
                            class="input__control"/>

                        </div>
                        <div class="form__input">
                            <input type="text" 
                            placeholder="Soyisim" 
                            name="soyisim"
                            class="input__control"/>  

                        </div>
                    </div>
                    <div class="form__input">
                        <input type="text" 
                        placeholder="Konu" 
                        name="konu"
                        class="input__control"/>
                    </div>

                    <div class="form__input">
                        <textarea
                        id="" 
                        placeholder="Mesajınızı yazın"
                        name="mesaj"
                        cols="30"
                        rows="10"
                        class="input__control textarea"></textarea>

                    </div>
                    <button class="btn contact__btn">Mesaj Gönder</button>



                </form>

                </div>
            </div>
            
            
        </section>
      </main>
  
      <!--==================== FOOTER ====================-->
      <footer class="footer">
        <div class="footer__container container">
            <p class="footer__copyright"> &copy; 2024 Aslınur Aktaş. Tüm Hakları Saklıdır
            </p>
            <div class="footer__social-links">
            <a href="https://twitter.com/" class="footer__social-link" target="_blank">
            <i class="fa-brands fa-x-twitter"> </i>
            </a>
            <a href="https://instagram.com/" class="footer__social-link" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://facebook.com/" class="footer__social-link" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://linkedin.com/" class="footer__social-link" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/" class="footer__social-link" target="_blank">
                <i class="fab fa-github"></i>
            </a>

            </div>
        </div>
    

      </footer>

       <!--==================== SCRİPT KISMI ====================-->
      <script>
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav__link');

            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - sectionHeight / 3) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active-link');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active-link');
                }
            });
        });
    </script>

</body>
</html>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("baglanti.php");

if(isset($_POST["isim"], $_POST["soyisim"], $_POST["konu"], $_POST["mesaj"])) {
    $isim=$_POST["isim"];
    $soyisim=$_POST["soyisim"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    
    $ekle = "INSERT INTO `iletisim`( isim, soyisim, konu, mesaj) VALUES ('".$isim."','".$soyisim."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle) === TRUE) {
        echo "<script> alert('Mesajınız Başarı ile Gönderilmiştir'); </script>";
    } 
    else {
        echo "<script> alert('Mesajınız gönderilirken bir hata oluştu.'); </script>";
    }
}


?>














