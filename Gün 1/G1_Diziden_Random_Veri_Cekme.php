<!DOCTYPE html>
<html>
<body>
<h1> Günün Sözü </h1>
<?php
$sozler  = array("Bir elin nesi var" ,
          "Vegasta olan vegasta kalır" ,
          "Saman altından su yürütmek",
          "Sora sora bağdat bulunur",
          "Ak akçe kara gün içindir");


for($i=1; $i<=10; $i++)
{
  $Soz_No = rand(0,count($sozler)-1);
  echo $sozler [$Soz_No]. "<br />";
}


?>
</body>
</html>
