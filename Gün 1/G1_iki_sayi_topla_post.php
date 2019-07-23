<!DOCTYPE html>
<html>
<body>
<center>
<h2>Girilen 3 Sayının çarpımı - POST Örneği</h2>

<?php if( !isset( $_POST["sayi1"] ) ) { ?>



<form method="post">
  1.Sayı: <br>
  <input type="text" name="sayi1" placeholder="1.Sayıyı giriniz">
  <br>
  2.Sayı:<br>
  <input type="text" name="sayi2" placeholder="2.Sayıyı giriniz">
  <br>
  3.Sayı :<br>
  <input type="text" name="sayi3" placeholder="3.Sayıyı giriniz">
  <br><br>
  <input type="submit" value="Hesapla">
</form>

<p>Girilen 3 sayının çarpımını ekrana yazan php kodu</p>
<?php } // BU KISIMDA BULUNAN KAPATMA İŞARETİ HTML'İN ÜSTÜNDE BULUNAN
        // PHP BLOĞUNUN İF FONKSİYONUN KAPATMASIDIR ?>


<?php
  if(isset($_POST["sayi1"])){
    $a = $_POST[sayi1];
    $b = $_POST[sayi2];
    $c = $_POST[sayi3];
    $sonuc = $a * $b * $c;
    echo "<h1>SONUÇ: $a * $b * $c = $sonuc</h1>";
    echo '<a href = "?"> Geri dönmek için tıklayınız</a>' ;
    }
 ?>

</center>
</body>
</html>
