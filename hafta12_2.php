<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>listele</title>
</head>
<body>
<form name="form" action="" method="post">
    <table>
    <h1>Kütüphane İşlemleri</h1>
    <table border="2" cellpadding="10" cellspacing="0" width="700">
        <tr>
            <td>
                    <table>
                        <tr>
                            <td><label for="kitapAdi">Kitabın Adı:</label></td>
                            <td><input type="text" id="kitapAdi" name="kitapAdi"></td>
                        </tr>
                        <tr>
                            <td><label for="kitapTuru">Kitabın Türü:</label></td>
                            <td>
                                <select id="kitapTuru" name="kitapTuru">
                                    <option value="Roman">Roman</option>
                                    <option value="Hikaye">Hikaye</option>
                                    <option value="Bilim">Bilim</option>
                                    <option value="Tarih">Tarih</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="yazarAdi">Yazarın Adı:</label></td>
                            <td><input type="text" id="yazarAdi" name="yazarAdi"></td>
                        </tr>
                        <tr>
                            <td><label for="yayinevi">Yayınevi:</label></td>
                            <td><input type="text" id="yayinevi" name="yayinevi"></td>
                        </tr>
                        <tr>
                            <td><label for="sayfaSayisi">Sayfa Sayısı:</label></td>
                            <td><input type="number" id="sayfaSayisi" name="sayfaSayisi"></td>
                        </tr>
                        <tr>
                            <td><label for="ozet">Özet:</label></td>
                            <td><textarea id="ozet" name="ozet" rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3" >
                                <input type="submit" name="kaydet" value="Kaydet">
                                <input type="submit" name="sil" value="Sil">
                                <input type="submit" name="guncelle" value="Güncelle">
                                <input type="submit" name="listele" value="Listele">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
  
</body>
</html>