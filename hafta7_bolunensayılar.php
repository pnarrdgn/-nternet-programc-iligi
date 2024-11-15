<html>
<head>
<meta charset="utf-8">
     <title>ÜÇE VE BEŞE BÖLÜNME</title>
</head>
</body>
      <form name="form " action="" method="POST">
         <table>
             <tr>
                  <td>1. sayıyı giriniz:</td>
                  <td> <input type="text" name="sayi1"> </td>
                  
</tr>
<tr>
                  <td>2. sayıyı giriniz:</td>
                  <td> <input type="text" name="sayi2"> </td>
</tr>
<td>seçim yapınız:</td>
<td><select name="secim">
    <option value="ucebolunme">ikisayı arasında 3'e bölünen sayılar </option>
    <option value= "besebolunme">iki sayı arasında 5'e bölünen sayılar</option>
</select></td>

</table>
</form>
<?php
    if (isset($_POST["gonder"])) {
        // Kullanıcıdan alınan veriler
        $ksayi1 = (int)$_POST["sayi1"];
        $ksayi2 = (int)$_POST["sayi2"];
        $secim = $_POST["secim"];

        // Sayıları küçükten büyüğe sıralama
        if ($ksayi1 > $ksayi2) {
            $enb = $ksayi2;
            $enk = $ksayi1;
        } else {
            $enb = $ksayi1;
            $enk = $ksayi2;
        }

        // Seçime göre işlem yapma
        switch ($secim) {
            case "ucebolunme":
                echo "<h3>3'e Bölünen Sayılar:</h3>";
                for ($i = $enk; $i <= $enb; $i++) {
                    if ($i % 3 == 0) {
                        echo $i . "<br>";
                    }
                }
                break;

            case "besebolunme":
                echo "<h3>5'e Bölünen Sayılar:</h3>";
                for ($i = $enk; $i <= $enb; $i++) {
                    if ($i % 5 == 0) {
                        echo $i . "<br>";
                    }
                }
                break;

            default:
                echo "Lütfen bir seçenek belirleyin.";
                break;
        }
    }
    ?>

</body>
</html>