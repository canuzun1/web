<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<body>
    <!-- shift+alt+a ile açılama satırı açılabiliyor -->
    <?php
    // açıklama satırı
    /* 
    açıklama satırı bloğu shift+alt+a ile açılabiliyor
    */
    /* 
    kullanılan komutlar
    echo: sayfaya yazı yazdırmaya yarıyor.içerisinde html etiketleri kullanıabilir.
    çift veya tek tırnak ile kullanılabilir. çift tırnak iöersinde değişken içerikleri gösterilir
    nokta işareti ile birleştirme yapılabilir
    \ Kaçış karakteridir özel ifadelerden önce kullanılır.
    */


    echo "<h4>Aydın Adnan Menderes Üniversitesi</h4>";
    echo '<h3>Aydın Meslek Yüksekokulu</h3>';
    echo "Bilgisayar Programcılığı" . "<br>" . "Web Teknolojileri";
    echo "Bilgisayar Programcılığı" . "Web Teknolojileri" . "<br>";


    echo "<hr> <h4> Değişken Tanımlama Kuralları</h4>";
    echo "<ol>
        <li>Değişken isimleri $ ile başlar  </li>
        <li>Değişken isimleri sayısal bir ifade ile başlayamaz</li>
        <li>Değişken isimlerinde boşluk kulanılmaz. iki kelime varsa: birinci_sinif, birinci-sinif örnekleri kullanımı önerilir</li>
        <li>Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır. </li>
        <li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi!= \$Sayi </li>
        <li>Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak (\") veya tek tırnak (') kullanılır. </li>
        <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>
        <li>Değişken ismi ,değişkenin içeriğini ifade etmeli.</li>
        <li>Değişkenler ekrana echo komutu ile yazdırılır.</li>

    </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";

    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 34;

    echo $isim . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";

    /* Uygulama:
        Üniversite-myo-ad-soyad-numara değişkenlerini oluşturup içeriğini uygun şekşlde doldurunuz.
        Girilen bu değişkenleri değerlerini bir html taplo içerisinde gösteriniz.
    */

    $üni = "Aydın Adnan Mendere Üniversitesi";
    $myo = "Meslek Yüksekokulu";
    $ad = "Mehmet Can";
    $Soyisim = "UZUN";
    $numara = "216001064";





    ?>

    <form action="">
        <label for="üni">Üniversite</label>
        <input type="text" name="" disabled value="<?php echo $üni; ?>" id="üni"> <br>
        <label for="myo">MYO</label>
        <input type="text" name="" disabled value="<?php echo $myo; ?>" id="myo"> <br>
        <label for="ad">Ad</label>
        <input type="text" name="" disabled value="<?php echo $ad; ?>" id="ad"> <br>
        <label for="Soyisim">Soyisim</label>
        <input type="text" name="" disabled value="<?php echo $Soyisim; ?>" id="Soyisim"> <br>
        <label for="numara">Numara</label>
        <input type="text" name="" disabled value="<?php echo $numara; ?>" id="numara"> <br>


    </form>
    

</body>

</html>