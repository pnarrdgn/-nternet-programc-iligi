<html>

  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <form name="form" action="" method="post">
    <table> <tr>

      <td>Adı:</td>
      <td><input type="text" name="adi"></td>
      </tr>
    <tr>
    <td>soyadı:</td>
    <td><input type="text"
     name="soyadi"></td>
    </tr>
    <tr>
    

      <td><input type="submit"
      name="gonder" value="kaydet"></td>
      </tr>

      </table>
</body>
    

  </html>

  <?php
  if(isset($_POST["gonder"]))

{
    $kadi=$_POST["adi"];
    $ksoyadi=$_POST["soyadi"];
    echo "merhaba".$kadi." ".$ksoyadi;
}
?>