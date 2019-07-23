<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Txt Veri Yaz</title>
  </head>
  <body>
    <center><h1> Dosyaya yazı yazma </h1>  </center>
<center>
    <form method="post">


      Ad Giriniz <input type="text" name="ad" />  <br />
      Soyad giriniz <input type="text" name="soyad" /><br />
        <input type="submit" name="Yolla" />

    </form>
</center>




    <?php
        if (isset($_POST["ad"])) {
          $isim = $_POST["ad"] . ";" . $_POST["soyad"] . "\n";
          $mevcut_isimler = file_get_contents("isimler.txt");
          $dosya_son_durum = $mevcut_isimler . $isim;
          file_put_contents("isimler.txt", $dosya_son_durum);

        }
     ?>
  </body>
</html>
