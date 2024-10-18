
<?php
/*
//isset,unsetkullanımı
echo"isset($adisoyadı)"."<br>";
$adisoyadı="pınar doğan";
echo"isset($adisoyadı)";

$degisken="gelişim üniversitesi";
echo $degisken."<br>";
unset($degisken);
echo $degisken;
//değişkenin içini değiştirmeyi yok etmeyi sağlar.
*/

//doğum yılı hesaplama
/*
$yil=2024;
$dogum_yili=1987;
$yas=$yil-$dogum_yili;
echo "benim yaşım".$yas;
*/

//basit hesap makinesi
/*
$sayi1=35;
$sayi2=5;
$topla=$sayi1+$sayi2;
$cikart=$sayi1-$sayi2;
$carp=$sayi1*$sayi2;
$bol=$sayi1/$sayi2;
$mod=$sayi1%$sayi2;
$us=$sayi1**$sayi2;

echo "1.sayinın değeri: ".$sayi1."<br>".
    "2.sayinın değeri: ".$sayi2."<br>".
    "toplama işleminin sonucu: ".$topla."<br>".
    "çıkartma işleminin sonucu: ".$cikart."<br>".
    "bölme işleminin sonucu: ".$bol."<br>".
    "mod işleminin sonucu: ".$mod."<br>".
    "us işleminin sonucu: ".$us;
    
*/
//artırma ve azaltma öperatörleri

$sayi=15;
echo "<u>yazmış olduğunuz sayının değeri:</u>".$sayi."<br>". 
"sayının değerini artırma işlemi:".++$sayi."<br>". 
"sayının değerini azaltma işlemi:".--$sayi;
?>


