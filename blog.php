<?php 
require_once "App/config/config.php";
require_once "App/classe/User.php";
$user = new User();
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css" />
    <link rel="stylesheet" href="izgledCSS/user_admin.css" type="text/css" />
    <link rel="stylesheet" href="izgledCSS/blog.css" type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-r4JSEV8OLcW2TToJ8dKFPCgAqOIFKgoLNFa6eC/7E9RHIf1Q5U6h" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
 <style>
       .register-button {
            list-style-type: none;
              position: relative;
              top: -20px; 
              margin-left: -10px; /
        }
    </style>
    
</head>
<body>

        


    <header>
        <nav>
        <!--     <div class="login-button">
                    <a href="login.php" class="button" onclick="openLoginPopup()">Log in</a>
                <img src="" alt="Login Icon">
                </div>-->
                <!--OBRATI PAZNJU-->
            
            <?php if(!$user->if_logged()) :?>
                </div>
  <li class="register-button ">
        <a class="button" href="login.php">Login</a>
    </li>
    <li class="register-button ">
        <a class="button" href="prijavise.php">Register</a>
    </li>
    <?php else: ?>
        <li class="nav-item"><br><br><br>
    <a class="nav-link modern-button" href="change.php">Change password</a>
</li>
<li class="nav-item">
    <a class="nav-link modern-button" href="licnipodaci.php">Licni podaci</a>
</li>
<li class="nav-item">
    <a class="nav-link modern-button" href="logout.php">Logout</a>
</li>

    <?php endif; ?>
        </header>
        <br>
        <br>
        <br>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
        <h1>Blog</h1>





        <h3 class ="left_bankina">Jordan putovanje kao nijedno drugo: Otkrijte historijski biser Bliskog istoka</h3>
        <h5 class = "left_hederpet">Azija</h5>
<div class="container">
  <img src="blog/kamila.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <p  class ="left_tekst">Ako tražite nezaboravnu avanturu u zemlji bogate historije, kulture i prirodnih ljepota, onda je Jordan prava destinacija za vas. 
        Ova zemlja Bliskog istoka svojim posjetiteljima pruža jedinstvene doživljaje i zapanjujuće znamenitosti koje će vas ostaviti bez daha.
         Sada je vrijeme da otkrijemo zašto je Jordan postao toliko popularan među putnicima diljem svijeta. Magična Petra u...</p>
         <a href="Jordan.php">Nastavite s čitanjem</a>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3 class ="left_bankina">Da li je bezbijedno putovati u Černobilj?</h3>
        <h5 class = "left_hederpet">Evropa</h5>
<div class="container">
  <img src="blog/hejaj.png" alt="Nature" style="width:100%;">
  <div class="text-block">
    <p  class ="left_tekst">Prvo pitanje koje sam dobila, nakon što sam izjavila da za svoj godišnji odmor idem u Černobilj, bilo je 
        ‘’Da li si ti normalna?’’, ‘’Ti zaista ne želiš djecu?’’ i ‘’Ja se ne bih usudio/la’’. 
        Od kad znam za sebe, isto koliko su me zanimali mračni događaji iz Prvog i Drugog svjetskog rata tako se i Černobilj nalazio poprilično na vrhu liste kao mjesto koje moram...</p>
         <a href="cernobilj.php">Nastavite s čitanjem</a>



         <br><br><br>
         <button class="nekst" onclick="goToNextPage()">Sljedeca</button>

  </div>
</div>
       






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<style>


.nekst  {
    background-color: #04AA6D; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .nekst  {border-radius: 8px;}

    footer a {
    text-decoration: none;
    transition: border-bottom 0.3s ease;
    font-size: 1.1em; 
    color: white; 
}

footer a:hover {
    border-bottom: 1px solid; 
    font-size: 1.2em; 
}
.copy p{
  color: white;
 
 
}
.sredina{
    margin-top:25px;
    text-align:center;
}
    
.sredina {
            margin-top: 25px;
            text-align: center;
        }

        .sredina i {
            font-size: 30px;
            margin: 0 10px;
            color: #333; 
            transition: color 0.3s ease; 
        }

        .sredina i:hover {
            color: #007bff;
        }

        .copy {
            text-align: center;
            color: #333; 
        }
        
        .fa-facebook {
    background: #3b5998; 
    color: white;
  }

.fa-instagram {  
  background: #125688;  
  color: white;  
}  

  .fa-viber {
    background: #665CAC; 
    color: white;
  }

  .fa-whatsapp {
    background: #25D366; 
    color: white;
  }

  .fa-tiktok {
    background: #69C9D0; 
    color: white;
  }

  .fa-twitter {
    background: #1DA1F2; 
    color: white;
  }.fa-instagram {  
  background: #125688;  
  color: white;
  
  
  


  
}  
        

    
</style>



        
        <footer>
    <br>
    <div class="contact">
        <h2>KONTAKTIRAJTE NAS</h2>
        <div class="container-all">
            <div class="container-kompanija">
                <h3>KOMPANIJA<h3>
                <p><a href="onama.php"> O nama</a></p>
                <p><a href="galerija.php"> Galerija</a></p>
            </div>
            <div class="container-pomoc">
                <h3>POTRAŽITE POMOĆ<h3>
                <p><a href="faq.php"> FAQ</a></p>
                <p><a href="kontakt.php">Kontakt</a></p>
                <p><a href="zastitaosobnihpodataka.php">Zaštita osobnih podataka</a></p>
            </div>
            <div class="container-info">
                <h3>INFORMACIJE<h3>
                <p><a href="blog.php">Blog</a></p>
              
            </div>
        </div>
    </div>
    <div class="ftr">
        <div class="ftr-image">
            <img src="loc.png" alt="Image 11">
            <p>Turalibegova 43, Tuzla 75000</p>
        </div>
        <div class="ftr-image">
            <img src="phone.png" alt="Image 12">
            <p>+387 35 294-046</p>
        </div>
        <div class="ftr-image">
            <img src="email.png" alt="Image 13">
            <p>panorama.travels@info.gmail.com</p>
        </div>
    </div>
    <br><br>
   
</footer>
<div class="sredina">
     <br>
   


     <a href="link_ka_facebooku"><i class="fa-brands fa-facebook"></i></a>
<a href="link_ka_instagramu"><i class="fa-brands fa-instagram"></i></a>
<a href="link_ka_viberu"><i class="fa-brands fa-viber"></i></a>
<a href="link_ka_whatsappu"><i class="fa-brands fa-whatsapp"></i></a>
<a href="link_ka_tiktok"><i class="fa-brands fa-tiktok"></i></a>
<a href="link_ka_twitteru"><i class="fa-brands fa-twitter"></i></a>

    <p class="copy" style="text-align: center;">
        © 2024 Panorama Travels. Sva prava pridržana.
       <br><br><br> 
    </p>
</div>
            </div>
            </div>
            
        </div>
<script>
    function goToNextPage() {
    
    window.location.href = 'blogdva.php';
}

</script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJcFCQD8DST" crossorigin="anonymous"></script>
        </footer>
        </body>
</html>