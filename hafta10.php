<?php
//dizilerde ele çıkart fonksiyonları

/* echo "<h3<Array_unshift() kullanımı</h3>"."<br>";
 $diller=array("PHP","C#");
 array_unshift($diller, "javascript","phyton");
 print_r($diller);
 echo "<h3>Arrayshift()kullanımı</h3>";
 array_shift($diller);
 print_r($diller);
 echo "<h3>Array_push()kullanımı</h3>";
 array_push($diller, "vue"."laravel");
 print_r($diller);
 echo "<h3>array_pop kullanımı</h3>";
 array_pop($diller);
 print_r($diller);
 echo "<h3>unset kullanımı</h3>";
 unset($diller["2"]);
 print_r($diller);*/


//dizi birleştirme


/*echo "<h3>dizi elemanlarını birleştirme</h3>";
$marmara_bolge=array("balıkesir","istanbul","bursa");
$ege_bolge=array("izmir","manisa","aydın");
$tum_iller=array_merge($marmara_bolge,$ege_bolge);
echo "<pre>";
print_r($tum_iller);
echo"</pre>";*/

//dizideki ortak elamnaı bulma

/*echo "<h3>dizideki ortak eleman</h3>";
$dizi1=array("araba","kalem","ev");
$dizi2=array("araba","kalem","masa");
$dizi3=array("kalem","araba","sandalye");
$dizi4=array("masa","kalem","araba");
$ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
echo "<pre>";
print_r($ortak_bul);
echo"</pre>";*/


//dizi elemanlarını tek seferde çıktı alma


/*echo"<h3>implode kullanımı</h3>";
$programlamadilleri=array("PHP","HTML","CSS","JAVASCRİPT");
$duzenle=implode("|",$programlamadilleri);
echo $duzenle;*/


//dizi elemanlarından rastgele seçim


/*echo"<h3>diziden rastgele eleman seçme</h3>";
$sehir=array("balıkesir","istanbul","izmir","van","erzurum","muğla");
$rastgele=array_rand($sehir);
echo $sehir [$rastgele];*/


//dizilerde sıralama


/*echo"<h3>illeri sıralama</h3>";
$iller=array(
	"Ankara"=>6,
	"istanbul"=>34,
	"İzmir"=>35,
	"Balıkesir"=>10,
	"Kocaeli"=>41,
	"Kırklareli"=>39

);

echo "<h5>dizi elemanlarını anahtar değerleriini koruyarak büyükten küçüğe sıralama</h5>";
echo "<pre>";
asort($iller);
print_r($iller);
echo "</pre>";
echo "<h5>dizi elemanlarını anahtar değerleriini koruyarak küçükten büyüğe sıralama</h5>";
echo "<pre>";
arsort($iller);
print_r($iller);
echo "</pre>" ;*/





/*$sayi=array(
	"1"=>10,
	"2"=>30,
	"3"=>5,
	"4"=>85,
	"5"=>126,

);
echo "<h5>dizi elemanlarını küçükten büyüğe doğru sıralama</h5>";
echo "<pre>";
sort($sayi);
print_r($sayi);
echo "</pre>";

echo "<h5>dizi elemanlarını büyükten küçüğe doğru sıralama</h5>";
echo "<pre>";
rsort($sayi);
print_r($sayi);
echo "</pre>";

echo "<h5>dizi elemanlarını rastgele sıralama</h5>";
echo "<pre>";
shuffle($sayi);
print_r($sayi);
echo "</pre>";

echo "<h5>dizi elemanlarını indis değerine göre küçükten büyüğe sıralama</h5>";
echo "<pre>";
ksort($sayi);
print_r($sayi);
echo "</pre>";

echo "<h5>dizi elemanlarını indis değerine göre büyükten küçüğe sıralama</h5>";
echo "<pre>";
krsort($sayi);
print_r($sayi);
echo "</pre>";*/

//dizi elemanlarını tersine çevirme

/*echo "<h3>dizi elemanlarını tersine çevirme</h3>";
$isim=array("pınar","sıla","aysima","ceren");
$ters_cevir=array_reverse($isim);
echo "ilk hali"."<br>";
echo "<pre>";
print_r($isim);
echo "</pre>";
echo "ters hali"."<br>";
echo "<pre>";
print_r($ters_cevir);
echo "</pre>";*/

//dizi sayıcıları

echo"<h3>dizi sayıcıları</h3>";
$sayi=array(6,2,4,1,1,3,5,6);
echo "eleman sayısı:".count($sayi)."<br>".
"dizideki elemanların çarpım sonucu:".array_product($sayi)."<br>"
"dizideki tekrar eden elemenlar:";
print_r(array_count_values($sayi));






?>
