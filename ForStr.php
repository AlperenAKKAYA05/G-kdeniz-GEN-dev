<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Yıldız Üçgen Çizmece</title>
    <style>

    </style>
  </head>

  <body>
    <form action=" " method="POST">
      <b>Yıldız Satırı:</b> <input type="number" name="str">
      <button type="sumbit">Yıldız Çiz</button>
    </form>
    <?php
    if (!empty($_POST["str"])) {
        $input = $_POST["str"];
        for ($i = 1; $i <= $input; $i++)
        {
            for ($emp = $input; $emp > $i; $emp--)
            {
                echo "&nbsp;&nbsp;";
            }
            $end = ($i * 2) - 2;
            $line = (($i * 2) / 2) - 1;
            for ($str = 0; $str < ($i * 2) - 1; $str++)
            {
                if ($str == 0 || $end == $str || $line == $str || $i == $input)
                {
                    echo "*";
                }
                else 
                {
                    echo "&nbsp;&nbsp;";
                }
            }
            print("<br>");
        }
        }
?>
  </body>

</html>
