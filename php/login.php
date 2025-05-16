
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Login Sonucu</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
            body{
                background-image: url('../img/back.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                overflow-y: hidden;
                overflow-x: auto;

            }
            .kutu{
                backdrop-filter: blur(10px); 
                border: 1px solid rgb(86, 196, 196);
                padding: 40px;
                margin-top: -50px;
                border-radius: 20px;
                width:30vh;
                height:18vh;
                text-align:center;
            }
            </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid d-flex justify-content-center">
              <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Hakkımda</a></li>
                <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
                <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
                <li class="nav-item"><a class="nav-link" href="ilgi_alanlarim.html">İlgi Alanlarım</a></li>
                <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                <li class="nav-item"><a class="nav-link active" href="login.html">Login</a></li>
              </ul>
            </div>
          </nav>

          
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="kutu">
    <?php
        $dogru_kullanici = "b241210001@ogr.sakarya.edu.tr";
        $dogru_sifre = "b241210001";
        if($_POST['kullanici_adi'] == '' || $_POST['sifre'] == ''){
            echo "Kullanıcı adı ve şifre alanlarını boş bırakmayınız!";
            echo "<a href ='../login.html'> <br>Giriş Sayfasına Geri Dön</a>";
        }
        elseif(!filter_var($_POST['kullanici_adi'], FILTER_VALIDATE_EMAIL)){
            echo "Kullanıcı adınız mail adresi formatında olmalıdır.";
            echo "<a href ='../login.html'> <br>Giriş Sayfasına Geri Dön</a>";
        }
        elseif($_POST['kullanici_adi'] == $dogru_kullanici && $_POST['sifre'] == $dogru_sifre){
            echo "Giriş Başarılı! Hoşgeldiniz" . $_POST['kullanici_adi'];
        }
    ?>
  </div>
  </div>
</body>
</html>
