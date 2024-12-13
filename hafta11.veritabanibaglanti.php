<?php
try
{


$dbn=new PDO("mysql:host=localhost;
dbname=gelisim;charset=utf8","root","");
echo"kayıt başarılı";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}




?>