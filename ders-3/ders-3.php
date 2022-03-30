<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Teknolojileri-1</title>
</head>
<body>

    <?php 
    
        /* Uygulama Ödevi
        Kuyruk ve Yığın Veri yapılarının php üzerinde dizileri kullanarak örneklerndirmesini gerçekleştiriniz. 
        
        */
        /* 
        Uygulama : Rasgele üretilen sayı 
        50 den büyükse 
            Geçtiniz : Notunuz: x
        50 den küçükse 
            Kaldınız : Notunuz: x
        */


        $rastgele_sayi = rand(10,100);
        if($rastgele_sayi >= 50) {
            echo "Geçtiniz - Notunuz : $rastgele_sayi";
        } else {
            echo "kaldınız - notunuz : $rastgele_sayi";
        }
        
        echo "<br>";

        $not = rand(10,100);
        if($not > 50 ){
            echo "Geçtiniz $not";
        } else {
            echo "kaldınız $not";
        }
    
        echo "<h3>Sık kullanılan String Fonksiyonlar</h3>";

        $yazi = "Aydın Adnan Menderes Üniversitesi";
        echo "\$yazi Değişkenin içeriği: $yazi";
        echo "<br>\$yazi Değişkenin Türü: " . gettype($yazi);

        /* 
        İçeriğin büyük harfe dönüştürülmesi
        */

        echo "<br> \$yazi'nın büyük harf ile yazılması :" . $byazi = strtoupper($yazi);
        echo "<br> \$yazi'nın büyük harf ile yazılması :" . $byazi = mb_strtoupper($yazi);
        
        /* 
        İçeriğin küçük harfe dönüştürülmesi
        */

        echo "<br> \$yazi'nın küçük harf ile yazılması :" . $kyazi = strtolower($byazi);
        echo "<br> \$yazi'nın küçük harf ile yazılması :" . $kyazi = mb_strtolower($byazi);

    
        /* içeriğin ilk harfinin büyük harfe dönüştürülmesi */
        echo "<br>\$yazi'nın ilk harfini büyük :" . $yazi = ucfirst($kyazi);

        /* içeriğin her kelimesinin ilk harfinin büyük harfe dönüştürülmesi */
        echo "<br>\$yazi'nın her kelimesinin ilk harfini büyük :" . $yazi = ucwords($kyazi);

        /* içeriğin harf sayısı : */
        echo "<br> \$yazi'nın harf sayısı :" . strlen($yazi);

        /* ascıı char dönüşümü */
        echo "<br>karakter karşılığı (74) :  " . chr(74);
        echo "<br>";

        /* 0-255 arasında değerleri chr fonksiyonuna sokarak satır satır yazdırıız */
        for ($i=33 ; $i <= 126; $i++){
            echo "$i:" . chr($i) . " ";
        }

        echo "<br>";

        /* metnin parçalanarak diziye dönüştürülmesi */
        $dizi= explode(" " , $yazi);
        echo "<pre>";
        print_r($dizi);
        echo "</pre>";


        /* uygulama : metin içerisindeki kelime ve cümle sayısının alt alta yazdrınız. */
        $metin = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, vitae provident illum aliquid reiciendis dolorem necessitatibus facere sunt labore eveniet dignissimos autem. Distinctio expedita quibusdam non necessitatibus quisquam velit quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur illo eum sapiente officia id, nobis molestias placeat odit itaque omnis hic laboriosam ipsa facere sint alias maiores pariatur voluptates expedita?";

        $kelimedizisi = explode(" " ,$metin);
        $cumledizisi = explode("." , $metin);

        echo "kelime sayısı :" . count($kelimedizisi);
        echo "<br>";
        echo "cumle sayisi : " . count($cumledizisi);

        echo "<br>";

        /* uygulama : veri tabanından 2022-11-20 şeklinde gelen tarihi 20.11.2022 şeklinde gösteriniz. */
        $tarih = "2022-11-20";
        $tarihdizisi = explode("-" , $tarih);
        print_r($tarihdizisi);

        echo "tarih : $tarihdizisi[2].$tarihdizisi[1].$tarihdizisi[0] ";

        echo "<br>";

        /* dizinin metne dönüştürülmesi (implode) */

        echo "<br>";
        $aylardizisi = array(
            "ocak",
            "şubat",
            "mart",
            "nisan",
        );

        echo "<pre>";
        print_r($aylardizisi);
        echo "</pre>";

        echo $aylarstring = implode("-" , $aylardizisi);

        /* str_split string parçalama işlemi yapar */
        echo "<br>";

        $iban= "TR00001231212123123123";
        $yeniban= str_split($iban, 4);

        echo "<pre>";
        print_r($yeniban);
        echo "</pre>";

        foreach ($yeniban as $parca) {
            echo "$parca ";
        }


        echo "<br>";
        echo "implode iban : " . implode("-" , $yeniban);

        echo "<br> for iban";
        for ($i=0; $i < count($yeniban) ; $i++) { 
            echo $yeniban[$i] . " ";
        }

        




    ?>



</body>
</html>