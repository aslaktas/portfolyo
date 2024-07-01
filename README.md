# Kişisel Blog Sitesi

## Açıklama

Bu proje, kişisel bir blog sitesi ve portföy sayfası olarak tasarlanmıştır. Site,ayrıca kullanıcıların kendi portföy öğelerini ekleyip yönetebilecekleri bir admin paneline sahiptir.

## İçerikler

### Anasayfa
Anasayfa, ziyaretçilere genel bir bakış sunar.Kısa bir tanıtım ile başlar. Kişisel bilgilerle ilgili birkaç önemli bilgi verilir.

### Hakkımda
Bu sayfa, kullanıcının kendisi hakkında bilgi verir. Kısa bir biyografi, ilgi alanları ve kariyer hedefleri gibi bilgiler içerir.Kariyer yolculuğu ve profesyonel geçmişini anlatır.

### Deneyim & Eğitim
Kullanıcının iş deneyimleri ve eğitim geçmişi bu sayfada listelenir. İş pozisyonları, görevler ve eğitim kurumları hakkında detaylı bilgiler yer alır.

### Hizmetler
Bu sayfa, kullanıcının sunduğu profesyonel hizmetleri tanıtır. Her hizmet için açıklamalar ve ilgili detaylar bulunur.

### Yetenekler
Kullanıcının sahip olduğu beceri ve yetenekler bu sayfada sergilenir. Teknik beceriler, yazılım bilgisi ve diğer yetenekler hakkında bilgiler içerir. Hangi dilleri bildiği ve bu konulardaki yetkinliği hakkında vs bilgiler mevcuttur

### Projelerim
Kullanıcının gerçekleştirdiği projeler burada listelenir. Her proje için kısa açıklamalar bulunur.

### İletişim
Bu sayfa, ziyaretçilerin kullanıcıyla iletişime geçebileceği bilgileri içerir. İletişim formu, e-posta adresi, telefon ve adres bilgileri yer alır.

## Kurulum

Bu projeyi yerel ortamınıza kurmak için aşağıdaki adımları izleyin:

## Gereksinimler

Bu proje, XAMPP paketindeki Apache sunucusu ve MySQL veritabanı kullanılarak geliştirilmiştir. PHP dilinde yazılmış olan bu kişisel blog sitesi, dinamik ve etkileşimli içerik yönetimi sunar. Proje geliştirme sürecinde Visual Studio Code (VS Code) editörü tercih edilmiştir. VS Code'un sunduğu geniş eklenti desteği ve kullanıcı dostu arayüzü sayesinde proje geliştirme süreci oldukça verimli geçmiştir. 


##Projenin İndirilmesi

Proje indirme ve klonlama için aşağıdaki adımları inceleyin:

1. Sağ üst köşede bulunan **"Code"** yazısına tıklayın.
2. Menüde **"Download ZIP"** seçeneğine tıklayın ve projeyi bilgisayarınıza indirin.
3. Git yazılımını kullanmanız gerekecektir.
4. Terminal veya Git Bash gibi bir komut satırı aracı açın.
5. İstediğiniz dizine gitmek için aşağıdaki komutu kullanın:
    ```sh
    cd path/to/your/directory
    ```
6. Projenin GitHub deposunun URL'sini kullanarak projeyi klonlayın:
    ```sh
    git clone https://github.com/aslaktas/portfolyo
    ```

Bu adımları takip ederek projeyi bilgisayarınıza indirebilir ve klonlayabilirsiniz.


## Veritabanı Ayarları

XAMPP kontrol paneli kullanarak bir MySQL veritabanı oluşturun.

Projede oluşturulan veritabanı: paylastikca


# Veritabanı Şeması

Projenizde kullanılan veritabanı tabloları ve alanları aşağıdaki gibidir:

### `adres`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `telefon`      | varchar   |
| `email`        | varchar   |
| `adres`        | text      |

### `anasayfa`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `baslik`       | varchar   |
| `hakkimda`     | varchar   |

### `deneyim`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `sirket_adi`   | varchar   |
| `sirket_pozisyon`| varchar |
| `sirket_tarih`   | varchar |
| `sirket_aciklama`   | varchar|

### `egitim`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `okul_adi`     | varchar   |
| `bas_tarih`    | varchar   |
| `okul_bölüm`   | text      |

### `hakkimda`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `ad_soyad`     | varchar   |
| `email`        | varchar   |
| `yas`          | int       |
| `ulke`         | varchar   |
| `hakkimda`     | varchar   |

### `hizmetler`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `baslik`       | varchar   |
| `aciklama`     | varchar   |

### `iletisim`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `isim`         | varchar   |
| `soyisim`      | varchar   |
| `konu`         | varchar   |
| `mesaj`        | varchar   |

### `projeler`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `p_adi`        | varchar   |
| `p_aciklama`   | varchar   |
| `p_resim`      | varchar   |

### `referanslar`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `ad_soyad`     | varchar   |
| `sehir`        | varchar   |
| `yorum`        | varchar   |

### `yetenekler`
| Alan Adı       | Veri Tipi |
|----------------|-----------|
| `id`           | int       |
| `y_adi`        | varchar   |
| `y_orani`      | varchar   |
| `y_aciklama`   | varchar   |



## Projenin içinde bulunan yönetici paneline erişmek için bir kullanıcı adı ve şifre belirleyin.

















