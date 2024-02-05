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
              top: -20px; /* Prilagodite ovu vrednost prema vašim potrebama */
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





        <h3 class ="left_bankinaa">Mjesta sa najboljim pogledom u Pragu</h3>
        <h5 class = "left_hederpet">Evropa</h5>
<div class="container">
  <img src="blog/prag.png" alt="Nature" style="width:100%;">
  <div class="text-block">
    <p  class ="left_tekst">
    Češka prijestolnica je jedan od najposjećenijih gradova u Europi, a putovanje u Prag se pored raskošne arhitekture, brojnih Praških katedrala i velikog broja romantičnih mostova pamti upravo po fascinantnim pogledima koji se sa njih pružaju na cijeli grad.<br>

Kada se nađete na Hradčanima, kraljevskom kompleksu u samom srcu starog grada, nemoguće je izbjeći da vam sa vidikovca zastane dah pri panoramskom pogledu na zlatni grad.<br>

Kada se spustite se malo niže do čuvenog Karlovog mosta u podnožju Hradčana, dok prelazite preko Vltave, uočit ćete kako ovaj magični grad izgleda sa rijeke i uz zalazak sunca na ovom pješačkom mostu osjetit ćete čari njegovih legendi.<br>

A ako produžite preko mosta, ka samom srcu Praga do Staromjetskog trga, naići čete na impozantni astronomski sat. Preški Orloj, koji predstavlja glavni simbol ovog grada, je sat koji ima specijano izrađen brojčanik koji pokazuje položaje Sunca, Mjeseca, zodijačku konstelaciju i pojedine glavne planete. On pokazuje srednjovijekovnu percepciju vremena, pa kao takav ima izuzetno veliki historijski značaj i definitivno predstavlja glavnu atrakciju u ovom gradu.<br>

Kada uđete unutra i popnete se do vrha astronomskog tornja imat ćete priliku da uživate u definitivno najboljem pogledu, ne samo na prelijepi starogradski trg pun ljudi i građevine oko njega, već na cijeli Zlatni Prag, Pariz istoka, Rim sjevera, grad stotinu tornjeva u srcu Europe.<br>
    </p>
         


  </div>
</div>




<!--<div class="top"></div>-->
<br><br><br><br><br><br><br><br><br><br><br><br<br><br><br><br><br><br<br><br><br><br><br><br<br><br><br><br><br><br<br><br><br><br><br><br <br><br><br><br><br><br<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<style>
    footer a {
    text-decoration: none;
    transition: border-bottom 0.3s ease;
    font-size: 1.1em; /* Adjust the font size as needed */
    color: white; /* Set the desired color */
}

footer a:hover {
    border-bottom: 1px solid; /* You can set the desired border style and color here */
    font-size: 1.2em; /* Adjust the font size for the hover state if desired */
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
            color: #333; /* Set the default color */
            transition: color 0.3s ease; /* Add smooth transition for color change */
        }

        .sredina i:hover {
            color: #007bff;
        }

        .copy {
            text-align: center;
            color: #333; 
        }
        
        .fa-facebook {
    background: #3b5998; /* Facebook boja */
    color: white;
  }

.fa-instagram {  
  background: #125688;  
  color: white;  
}  

  .fa-viber {
    background: #665CAC; /* Nasa Viber boja */
    color: white;
  }

  .fa-whatsapp {
    background: #25D366; /* Nasa WhatsApp boja */
    color: white;
  }

  .fa-tiktok {
    background: #69C9D0; /* Nasa TikTok boja */
    color: white;
  }

  .fa-twitter {
    background: #1DA1F2; /* Nasa Twitter boja */
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

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJcFCQD8DST" crossorigin="anonymous"></script>
        </footer>
        </body>
</htm