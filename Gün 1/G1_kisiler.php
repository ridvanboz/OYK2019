<h1>.TXT Dosyasından okuan kişiler</h1>
<html>
<table border="1" cellpadding ="5">
  <tr>
    <td>Adı</td>
    <td>Soyadı</td>
    <td>Şehri</td>
  </tr>
<?php
        /*
        $stt = "Ali;Şen;Antalya";
        $arrStt = explode(";",$stt);
        print_r($arrStt);
        echo "<br />";
        echo "<br />";
        echo "Adı: {$arrStt[0]}<br />";
        echo "Soyadı: {$arrStt[1]}<br />";
        echo "Şehri: {$arrStt[2]}<br />";
        */

$dosya = "G1_kisiler.txt";
$arrSatirlar = file($dosya);
print_r($arrSatirlar[1])

foreach ($arrSatirlar as $key => $value) {
    $Kisi = $value ;
    $arrKisi = explode(";", $Kisi);
    echo "ADI :" . $arrKisi . "<br />";

    echo
    <tr>
        <td>{$arrKisi[0]}</td>
        <td>{$arrKisi[1]}</td>
        <td>{$arrKisi[2]}</td>
      </tr>;

}



 ?>
</table>
</html>
