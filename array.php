<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pozitif Bölenleri Bulma</title>
    <style>

    </style>
  </head>

  <body>
    <form action=" " method="POST">
      <b>Pozitif Bölenlerini Almak İstediğin Sayı:</b> <input type="number" name="num">
      <button type="sumbit">Pozitif Bölenleri Bul</button>
    </form>
    <?php
//parametre olarak alınan bir sayının pozitif bölenlerini diziye ekleme ve çıktı alma
if (!empty($_POST["num"])) {
$input = $_POST["num"]; 
 $PosDivi = array();
 for($i=1;$i<=$input;$i++) {
 if($input % $i == 0) 
 $PosDivi[] = $i;
 }
 
echo "<pre>";
print_r($PosDivi);
echo "</pre>";
 }
?>
  </body>

</html>
