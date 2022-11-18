<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sayı Tahmin Etmece</title>
    <style>
      p {
        position: absolute;
        padding-top: 2rem;
      }

      span.num {
        filter: blur(4px);
      }

      span.num:hover {
        filter: blur(0);
      }

    </style>
  </head>

  <body>
    <?php
    // _SESSION'ları tutar ve okur 
session_start();

//rand sayı üretir yada bulunmayı bekler
if ($_GET['rand']=="true"){
	$num = $_SESSION["num"];
}
else {
	$rannum = rand(1,10);
    $_SESSION["num"] = $rannum;
	header("Location: NumGues.php?rand=true");
}

// Girilen değeri sorgular ve seçime göre şekillendir.
if (!empty($_POST["predic"])) {
	$predic = $_POST["predic"];
	// Tahmin Sorgulama İşlemleri
    if ($num == $predic) {
        $_SESSION["true"] = "Tebrikler Doğru Tahmin ".$num." 👏";
		header("Location: NumGues.php?NumGues=true");
    } elseif ($num < $predic) {
        echo "<br>Fazla yukarlaradasın sanki 🙂";
    } elseif ($num > $predic) {
        echo "<br>Fazla aşağdasın sanki 🙃";
    }
} else {
	//boş değerse tahmin yazısını gösterir.
	if (!empty($_SESSION["true"])) {
	echo $_SESSION["true"];
    echo "<br>Yeni tutuğum sayıyı bul bakalım 💡 1-10";
	}
	else {
    echo "<br>Lütfen Tahmininizi Giriniz! 1-10";
	}
}

?>
    <form action=" " method="POST">
      <b>Tahmin:</b> <input type="number" name="predic">
      <button type="sumbit">Tahmin Et</button>
    </form>

<?php
// Tutulan sayı kopya çekmek için
echo "<p>🤫 Kopya: "."<span class='num'>".$num."</span></p>";
?>

  </body>

</html>
