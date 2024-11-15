<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>FAKTÖRİYEL</title>
</head>
<body>
    <h1>Faktöriyel Hesaplama</h1>

    <!-- Form Başlangıcı -->
    <form name="form" action="" method="POST">
        <table>
            <tr>
                <td>Sayı giriniz:</td>
                <td><input type="number" name="sayi"></td>
                <td><input type="submit" name="gonder" value="GÖNDER"></td>
            </tr>
        </table>
    </form>
    <!-- Form Sonu -->

    <?php
    if (isset($_POST["gonder"])) {
        // Kullanıcıdan alınan sayıyı al
        $ksayi = $_POST["sayi"];

        // Sayıyı negatifse faktöriyel hesaplaması yapma
        if ($ksayi < 0) {
            echo "Negatif sayıların faktöriyelini hesaplamak mümkün değildir."."<br>";
        } else {
            // Faktöriyel hesaplama
            $faktoriyel = 1;
            for ($i = 1; $i <= $ksayi; $i++) {
                $faktoriyel *= $i; // Faktöriyel hesaplama
            }

            // Sonucu ekrana yazdırma
            echo $ksayi." sayısının faktöriyel hesaplaması: ".$faktoriyel."<br>";
        }
    }
    ?>

</body>
</html>
