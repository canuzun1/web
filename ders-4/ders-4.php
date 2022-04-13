<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders4</title>
</head>
<body>
    
    <h3>Php'de diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>

<?php
    $telno= "+905342046807";
    $yenitel= str_split($telno, 3);

    foreach ($yenitel as $parca) {
            echo "$parca ";
    }
    
    echo "<br>";    
    $dizi1 = array(1,2,3,4,"kemal","arıca",13.5);
    $dizi2 = [1,2,"kemal","arıca",13.5];
    
    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<br>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "Dizinin 5. elemanı: $dizi1[5]";
    echo "<br>";
    echo "Dizinin 5. elamanı: " . gettype($dizi1[5]);
    echo "<br>Dizinin 0. elemanı: $dizi1[0]";
    echo "<br>Dizinin 1. elemanı: $dizi1[1]";
    echo "<br>Dizinin 2. elemanı: $dizi1[2]";
    echo "<br>Dizinin 3. elemanı: $dizi1[3]";
    echo "<br>Dizinin 4. elemanı: $dizi1[4]";

    echo "<h3> Dizinin İçeriğinin Forech Döngüsü ile Yazıdırılması-1</h3>";

    foreach ($dizi1 as $value) {
        echo $value . "<br>";
    }
    
    echo "<h3> Dizinin İçeriğinin Forech Döngüsü ile Yazıdırılması-2</h3>";

    foreach ($dizi1 as $key => $value) {
        echo "$key - $value . <br>";
    }
    
    echo "<h3> Dizinin içeriğinin for döngüsü ile yazdırılamsı</h3>";
    
    for ($i = 0; $i <count($dizi1); $i++){
        echo $dizi1[$i] . "<br>";
    }


    $sayilar = array(
        array(1,3,5,7,9),
        array(2,4,6,8,10)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar dizisinin içerisindeki 2. dizinin 3. elamanı : " . $sayilar[1][3];

    echo "<br>Sayılar dizisinin içerisindeki 1. dizinin 4. elamanı : " . $sayilar[0][4];

    echo "<br>-------------";

    $sayilar = array(
        "integer" => array(55,46,45,87,81),
        "double" => array(12.5,45.2,12.5)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar dizisinin içerisindeki 1. dizinin 4. elamanı : " . $sayilar["integer"][4];

    echo "<br>Sayılar dizisinin içerisindeki 2. dizinin 1. elamanı : " . $sayilar["double"][1];

    $bilgiler = array(
        "id"      => "0",
        "adi"     => "Neslihan" , 
        "soyadi"  => "Gülmez",
        "gsm"     => "555 456 12 45",
        "yas"     => "29",
    );

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo "$bilgiler[adi] $bilgiler[soyadi] hoşgeldiniz.";

    $kullanıcılar = array(
        "kullanıcı1" => array(
        "id"      => "0",
        "adi"     => "Neslihan" , 
        "soyadi"  => "Gülmez",
        "gsm"     => "555 456 12 45",
        "yas"     => "29",
        ),
        "kullanıcı2" => array(
        "id"      => "1",
        "adi"     => "Ahmet" , 
        "soyadi"  => "Durmaz",
        "gsm"     => "555 456 12 45",
        "yas"     => "29",
        )
    );

    echo "<pre>";
    print_r($kullanıcılar);
    echo "</pre>";




    
?>

</body>
</html>