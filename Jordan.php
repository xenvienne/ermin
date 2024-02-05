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





        <h3 class ="left_bankinaa">Jordan putovanje kao nijedno drugo: Otkrijte historijski biser Bliskog istoka</h3>
        <h5 class = "left_hederpet">Azija</h5>
<div class="container">
  <img src="blog/kamila.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <p  class ="left_tekst">Ako tražite nezaboravnu avanturu u zemlji bogate historije, kulture i prirodnih ljepota, onda je Jordan prava destinacija za vas. 
        Ova zemlja Bliskog istoka svojim posjetiteljima pruža jedinstvene doživljaje i zapanjujuće znamenitosti koje će vas ostaviti bez daha. 
        Sada je vrijeme da otkrijemo zašto je Jordan postao toliko popularan među putnicima diljem svijeta.</p>
         


        <img src="blog/petrajordan.jpg" alt="Nature" style="width:75%;">
        <h6 class="petrasredina">Magična Petra u Jordanu / Unsplash.com</h6>
        
        <h3>Petra: Skriveni dragulj Jordana</h3>
        <p class ="left_tekst">Jordan ima nevjerovatno bogatu historiju koja datira hiljadama godina unazad. 
            Ova zemlja je bila dom raznim civilizacijama koje su ostavile svoj trag na njenom tlu.
            Jedna od najpoznatijih atrakcija je stari grad Petra, koji se često naziva i "rozi grad".
            Ovaj sveti grad izdubljen u stijenama oduvijek je bio mamac za arheologe, avanturiste i ljubitelje historije.
            Prizor koji se otvara pred vama dok ulazite u uski prolaz Siq i ugledate prostrani Al-Khazneh, što u prevodu sa arapskog znači "blago", zaista je spektakularan. 
            Ovo arhitektonsko remek-djelo predstavlja samo vrh ledenog brijega jer Petra je mnogo više od toga. Uz pomoć naših lokalnih vodiča, možete istražiti skrivene prolaze, hramove i grobnice koje čuvaju tajne drevnih civilizacija.
</p>
        <img src="blog/kupase.jpg" alt="Nature" style="width:65%;">
        <h6 class="petraleft">Opuštanje u Mrtvom moru / Unsplash.com</h6>
        <h3>Otkrijte ljekovita svojstva Mrtvog Mora</h3>
        <p>Dok ste u Jordanu, nemojte propustiti posjetiti i Mrtvo more, jedno od najnevjerovatnijih prirodnih čuda na svijetu.
             Smješteno na najnižoj tački zemlje, Mrtvo more pruža jedinstveno iskustvo plutanja na slanoj vodi.
              Osim toga, blato Mrtvog mora poznato je po svojim ljekovitim svojstvima koja pomažu u liječenju kožnih bolesti i poboljšavaju opće zdravlje.
             Prepustite se raskoši spa tretmana i osjetite kako se vaše tijelo opušta i regeneriše.</p>
             <p>Osim Petre i Mrtvog mora, Jordan nudi i druge zapanjujuće znamenitosti. Wadi Rum je oaza mira i tišine koja privlači ljubitelje prirode, avanturiste i zaljubljenike u spektakularne pejzaže. Ovaj pustinjski krajolik oduzima dah svojim crvenkastim pješčanim dinama, monumentalnim stijenama i nevjerojatnim formacijama koje su rezultat hiljadugodišnjeg erozijskog djelovanja. Vožnja kroz Wadi Rum je kao putovanje u drugi svijet - svaki trenutak pruža novo otkriće i nevjerovatnu ljepotu.

Istražite Wadi Rum na tradicionalan način jahanjem kamila i doživite čari pustinjskog karavana. Dok se njišete na leđima kamila, osjetit ćete duh drevnih nomada koji su nekad putovali kroz ove prostore. Uživajte u mirnom ritmu dok prolazite kroz spektakularne pejzaže, osluškujete pjesmu vjetra i promatrate kako sunce obasjava pješčane dine zlatnom svjetlošću.

Za one željne avanture, vožnja džipovima kroz Wadi Rum pruža nezaboravan doživljaj. Osjetite uzbuđenje dok se probijate kroz pustinjske staze, prelazite strmim usponima i spuštate se niz pješčane padine. Uživajte u adrenalinskim trenucima dok se džip kreće kroz netaknutu ljepotu Wadi Ruma, pružajući vam nezaboravne prizore i uzbuđenje koje će vas držati na rubu sjedala.

Jedan od najmagičnijih trenutaka u Wadi Rumu je zalazak sunca. Dok se sunce polako spušta iza horizonta, pijesak mijenja boje i stvara spektakularan prikaz crvenih, narančastih i zlatnih tonova. Svjetlost sunca preliva se preko pustinje, stvarajući čarobnu atmosferu koja će vas ostaviti bez daha. Uživajte u ovom spektaklu prirode, praveći nezaboravne fotografije i stvarajući uspomene koje će trajati zauvijek.</p>
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
</html>