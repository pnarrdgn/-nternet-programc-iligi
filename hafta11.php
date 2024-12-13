<?php
include "hafta11.veritabanibaglanti.php";
$kayit=$db->exec("İNSERT İNTO deneme SET
id='4',ad='gelisim',soyad='üniversitesi'");
if($kayit)
{
    echo "kayıt işemi başarılı";

}
else
{
    echo "kayıt işlemi başarısız";

}
//veritanabııa prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("İNSERT İNTO deneme set
id=?,
ad=?,
soyad=?
");
$kayit=$sorgu->execute(array("5","tuğba","saray çetinkaya"));
if($kayit)
{
    echo "kayıt işlemi başarılı";
}
else
{
    echo "kayıt işlemi başarısız";
}
//veritanabııa prepare kullanarak manuel veri ekleme

$sorgu=$db->prepare("İNSERT İNTO deneme set
id=:id,
ad=:ad,
soyad=:soyad
");
$kayit=$sorgu->execute(array(
    "soyad"=>"benli",
    "id"=> "8",
    "ad"=>"sena nur"));
if($kayit)
{
    echo "kayıt işlemi başarılı";
}
else{
    echo "kayıt işlemi başarısız";
}







?>