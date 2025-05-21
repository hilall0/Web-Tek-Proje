<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Login Sonucu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="login-sayfasi-php">
<nav id="ana-nav" class="navbar navbar-expand-lg navbar-light">
         <div class="container">
          <div>
            <a class="navbar-brand"><img src="../img/Sakura.png" class=sakura></a>
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
            <li class="nav-item"><a class="nav-link ana-link" href="../iletisim.html">İletişim</a></li>
            <li class="nav-item"><a class="nav-link ana-link active" href="../login.html">Login</a></li>
          </ul>
          </div>
        </div>
        </nav>

          
    <div class="container d-flex justify-content-center align-items-center" id="kutu-log">
        <div class="kutu">
    <?php
        $dogru_kullanici = "b241210001@sakarya.edu.tr";
        $dogru_sifre = "b241210001";
        if($_POST['kullanici_adi'] == '' || $_POST['sifre'] == ''){
            echo "<b>Kullanıcı adı ve şifre alanlarını boş bırakmayınız!</b>";
            echo "<a href ='../login.html'> <br>Giriş Sayfasına Geri Dön</a>";
        }
        elseif(!filter_var($_POST['kullanici_adi'], FILTER_VALIDATE_EMAIL)){
            echo "<b>Kullanıcı adınız mail adresi formatında olmalıdır.</b>";
            echo "<a href ='../login.html'> <br>Giriş Sayfasına Geri Dön</a>";
        }
        elseif($_POST['kullanici_adi'] == $dogru_kullanici && $_POST['sifre'] == $dogru_sifre){
            echo "<b>Giriş Başarılı!<br> Hoşgeldiniz<br>" . $_POST['kullanici_adi'] . "</b>";
        }
        else{
          echo "<b>Tekrar deneyiniz!</b>";
            echo "<a href ='../login.html'> <br>Giriş Sayfasına Geri Dön</a>";
        }
    ?>
  </div>
  </div>
</body>
        <footer>
            <p class="footer">© 2025 Hilal İrem Patan</p>
        </footer>
</html>
