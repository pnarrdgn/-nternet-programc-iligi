<?php
include "hafta11.veritabanibaglanti.php";
$guncelle=$db->exec("UPDATE deneme SET adi='pınar' WHERE soyad='doğan'");
if($guncelle)
{
    echo "güncelleme başarışı";

}
else
{
    "güncelleme başarısız";
}

//veri tabanına prepare ile güncelleme
$sorgu=$db->prepare("UPDATE deneme set
ad=?,
soyad=?
");
$guncelle=$sorgu->execute(array("pınar","doğan"));
if($guncelle)
{
    echo "güncelleme işlemi başarılı";
}
else
{
    echo "güncelleme işlemi başarısız";
}



?>
