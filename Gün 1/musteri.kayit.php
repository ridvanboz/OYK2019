<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<body>
<center>

  <style>
  ::placeholder {
      color: blue;
  }
  :-ms-input-placeholder {
      color: red;
  }

  ::-ms-input-placeholder {
      color: orange;
  }
  </style>
<h2>AcAdam.Com Üye Kayıt</h2>
<p>
  <img src="kayit.png" height="42" width="42" />
</p>
<form method="post">

<p color = "red"><input name="isim" type="text" placeholder="Adınızı girin"/></p>
<p><input name="isim" type="text" placeholder="Soyadınızı girin"/></p>
<p><input name="isim" type="text" placeholder="Telefon numaranızı  girin"/></p>
<p><input name="isim" type="text" placeholder="E-Mail adresinizi girin"/></p>
<p><input name="isim" type="password" placeholder="Parola "/></p>
<p><input name="isim" type="password" placeholder="Tekrar Parola "/></p>
<br>

<center>


<table border="0">
  <tr>
    <th><center> Adres(İl):  </center></th>
    <th>  <select name="sehirler"  style="width: 100px;" >
    <center>

      <option>Şehir 1</option>
    	<option>Şehir 2</option>
    	<option>Şehir 3</option>
    	<option>Şehir4 </option>
    	<option>Şehir 5</option>
    </select><br></th>

  </tr>
  <tr>

    <td><center>Adres(İlçe):</center></td>
    <td> <center> <select name="ilçe" style="width: 100px;">
    	<option>İlçe 1</option>
    	<option>İlçe 2</option>
    	<option>İlçe 3</option>
    	<option>İlçe 4</option>
    	<option>İlçe 5</option>
        </center>
    </select><br></td>

  </tr>
  <tr>
    <td>Adres(Mahalle):</td>
    <td>  <select name="ilçe" style="width: 100px;">
    	<option>Mahalle 1</option>
    	<option>Mahalle 2</option>
    	<option>Mahalle 3</option>
    	<option>Mahalle 4</option>
    	<option>Mahalle 5</option>
    </select><br></td>

  </tr>
</table>
</center>







<br />
Adres:<br>
<textarea rows="4" cols="50" placeholder="Sokak, Cadde, Bina ve Kapı no gibi detayları bu kısıma yazınız."></textarea>>

</textarea><br /><br />


<label class="radio">
  <input type="radio" name="answer" checked>
  Üyelik <a href="file:///home/boz/Masa%C3%BCst%C3%BC/sozlesme.html">sözleşmesini</a>  okudum ve kabul ediyorum.
</label><br />

  <input type="submit" value="Kayıt ol">


</form>

</center>
</body>
</html>
