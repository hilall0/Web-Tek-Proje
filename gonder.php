<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
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
                padding: 2rem;
                border-radius: 2rem;
                width:100%;
                max-width:350px;
                text-align:center;
            }
            </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand"></a>
    <button class="navbar-toggler" data-toggle="collapse"></button>
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

          
    <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 70px);">
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

            if(isset($_POST['bisey1']))
                echo "<b> :</b>" . $_POST['bisey1'] . "<br>";
            if(isset($_POST['bisey2']))
                echo "<b> :</b>" . $_POST['bisey2'] . "<br>";

            if($_POST['mesaj'] != "")
                echo "<b>Mesajınız: </b>" . $_POST['mesaj'] . "<br>";

            if($_POST['okul'] != "")
                echo "<b>Okulunuz: </b>" . $_POST['okul'] . "<br>";

            if (isset($_FILES['dosya']) && $_FILES['dosya']['error'] === UPLOAD_ERR_OK) 
                echo "Dosya başarıyla yüklendi.";
              else
                echo "Dosya yüklenmedi veya seçilmedi.";
            

    ?>
  </div>
  </div>
</body>
</html>
