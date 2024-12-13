<?php
include "hafta11.veritabanibaglanti.php";
$kayit=$db->exec("İNSERT İNTO deneme SET
id='10',ad='mehmet',soyad='atıcı'");
if($kayit)
{
    echo "kayıt gerçekleştirildi. ID değeri:" .$db->lastInsertId();
}



?>