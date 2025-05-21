<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>İletişim Formu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="iletisim-sayfasi-php">

<nav id="ana-nav" class="navbar navbar-expand-lg navbar-light">
         <div class="container">
          <div>
            <a class="navbar-brand"><img src="../img/Sakura.png" class="sakura"></a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ana-navbar"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

         <div class="collapse navbar-collapse" id="ana-navbar">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link ana-link" href="../index.html">Hakkımda</a></li>
            <li class="nav-item"><a class="nav-link ana-link" href="../cv.html">CV</a></li>
            <li class="nav-item"><a class="nav-link ana-link" href="../sehrim.html">Şehrim</a></li>
            <li class="nav-item"><a class="nav-link ana-link" href="../mirasimiz.html">Mirasımız</a></li>
            <li class="nav-item"><a class="nav-link ana-link" href="../ilgi_alanlarim.html">İlgi Alanlarım</a></li>
            <li class="nav-item"><a class="nav-link ana-link active" href="../iletisim.html">İletişim</a></li>
            <li class="nav-item"><a class="nav-link ana-link" href="../login.html">Login</a></li>
          </ul>
          </div>
        </div>
        </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center" id="kutu-gonder">
        <div class="kutu">
    <?php
            echo "<h2>İletişim bilgileriniz alındı!</h2><br>";

            echo "<b>Adınız: </b>" . $_POST['adi'] . "<br>";
            echo "<b>Soyadınız: </b>" . $_POST['soyadi'] . "<br>";
            echo "<b>Telefon numaranız: </b>" . $_POST['telNo'] . "<br>";

            if($_POST['cinsiyet'] == 'erkek')
                echo "<b>Cinsiyetiniz: </b> Erkek <br>";
            elseif($_POST['cinsiyet'] == 'kadin')
                echo "<b>Cinsiyetiniz: </b> Kadın <br>";

            echo "<b>Emailiniz: </b>" . $_POST['email'] . "<br>";
            
            if(isset($_POST['telefon']) || isset($_POST['eposta']))
                echo "<b>İletişim tercihiniz :</b>";
            if(isset($_POST['telefon']))
                echo " Telefon";
            if(isset($_POST['telefon']) && isset($_POST['eposta']))
                echo ", ";
            if(isset($_POST['eposta']))
                echo " Email";
            echo "<br>";
            if($_POST['mesaj'] != "")
                echo "<b>Mesajınız: </b> " . $_POST['mesaj'] . "<br>";

            if($_POST['okul'] != "")
                echo "<b>Okulunuz: </b> " . $_POST['okul'] . "<br>";

            if(isset($_POST['kategori']))
                echo "<b>İletişim kurma amacınız: </b> " . $_POST['kategori'] . "<br>";        


            if (isset($_FILES['dosya']) && $_FILES['dosya']['error'] === UPLOAD_ERR_OK) 
                echo "Dosya başarıyla yüklendi: <b>" . $_FILES['dosya']['name']."</b>";
              else
                echo "Dosya yüklenmedi veya seçilmedi.";
    ?>
  </div>
  </div>
</body>
        <footer>
            <p class="footer">© 2025 Hilal İrem Patan</p>
        </footer>
</html>
