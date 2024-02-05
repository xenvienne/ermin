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





        <h3 class ="left_bankinaa">Jordan putovanje kao nijedno drugo: Otkrijte historijski biser Bliskog istoka</h3>
        <h5 class = "left_hederpet">Azija</h5>
<div class="container">
  <img src="blog/hejaj.png" alt="Nature" style="width:100%;">
  <div class="text-block">
    <p  class ="left_tekst">Prvo pitanje koje sam dobila, nakon što sam izjavila da za svoj godišnji odmor idem u Černobilj, bilo je ‘’Da li si ti normalna?’’, ‘’Ti zaista ne želiš djecu?’’ i ‘’Ja se ne bih usudio/la’’.<br>
        Od kad znam za sebe, isto koliko su me zanimali mračni događaji iz Prvog i Drugog svjetskog rata tako se i Černobilj nalazio poprilično na vrhu liste kao mjesto koje moram obići sa svoje bucket liste. <br>
        Moram odmah da napomenem da putovanje u Černobilj nije bilo standardno turističko putovanje gdje bih čekirala još samo jednu zemlju sa svoje liste i time zapanjila sve svoje prijatelje.<br>
        Prijatelji koji me znaju, znaju da sam mračna po prirodi i da su me uvijek takve stvari fascinirale i da sam uvijek pokušavala da pronađem smisao u besmislu historijskih poduhvata – a putovanje u Černobilj je samo bilo otkrovenje u svemu tome.<br>

        Sada, tačno 34 godine nakon nesreće (26.04.1986) u Nuklearnoj Elektrani Vladimir Ilič Lenjin dok bukte požari u okolini same elektrane i time ugrožavaju već dovoljno nastradalo područje na nama ostaje samo da se zamislimo do koje mjere je čovječanstvo spremno da ugrozi sredinu u kojoj živi zarad nekog većeg dobra, političkih razloga i dominacije Svijetom. <br>
        Ali, redanje teorija zavjera nije tema ovog teksta i to ćemo ostaviti za neke druge redove. Svjetski poznata ekološka katastrofa koja se desila u Ukrajini, nuklearnoj elektrani kraj Černobilja i Pripjata u posljednjih godinu dana tek dobija na popularitetu kao mjesto za turistička putovanja a sve posredstvom izlaska HBO serije ‘’Černobilj’’.<br>
        Ipak, koliko god da smo navikli na činjenicu da nam igrane serije otvaraju oči i šire vidike, u slučaju Černobilja moramo ipak pripaziti prilikom donešenja bilo kakvih radikalnih odluka u vidu posjete zone treba ozbiljno razmotriti sve činjenice.<br>

        Ono što odmah morate imati u vidu jeste da to nije nikakav lokalitet gdje se možete slobodno kretati, praviti fotografije (teško da ćete ponekad i poželjeti sve da uslikate) i uživati u prelijepim prizorima.<br>
        Kao što ćete sa velikim kamenom u stomaku posjećivati Aušvic, tako ćete se duboko zamisliti i nad lokalitetima tokom posjete Černobilju i Pripjatu.<br>
        Nemojte olako shvatati posjetu ovih mjesta samo zato što je to sad popularno i zato što to svi rade. Ono što prvo morate da shvatite to je da je Černobilj jedno mjesto velikog stradanja, ne samo u Ukrajini, već i posljedično cijelog svijeta. Sa tim u vezi se prema njemu morate ponašati sa poštovanjem i u svakom trenutku slušati svog vodiča u zoni.<br>
        Ukoliko se pridržavate određenih pravila posjeta Černobilju može biti krajnje zanimljivo iskustvo koje će vas nakon povratka u Kijev ostaviti u dubokim mislima i željom da promijenite nešto u svijetu, ili pak kao u mom slučaju – ostavit će vas u stanju apsolutne revoltiranosti.<br>

Na pitanje da li je bezbijedno putovati u Černobilj – i jeste i nije, ali može biti bezbijedno ukoliko ste svjesni situacije i pridržavate se svih pravila koja ćete dobiti prilikom odlaska na specijalizovanu turu. Morate imati u vidu da je ovo izuzetno nestabilno područje, da nivo radioaktivnosti oscilira i da se posredstvom prirodnih (ne)pogoda vaš obilazak kao i bezbijednost može mijenjati. Isključivo specijalizovane ture iz Kijeva imaju potrebne dozvole da biste mogli da odete na ovo mjesto. Priprema traje nedjeljama jer se ranije morate prijaviti za ovu ‘’ekskurziju’’, morate dostaviti svoje podatke, kopiju pasoša i upoznati se sa svim opasnostima i mjerama predostrožnosti.<br>
 Da biste ušli u zonu koja podrazumijeva 10km radioaktivne zone, grad Pripjat, Černobilj kao i posjetu samoj Nuklearnoj Elektrani morat ćete proći nekoliko pasoških kontrola, mjerenja nivoa radioaktivnosti na odjeći koju unosite u ovo zaštićeno područje i obavezno biti adekvatno obučeni.<br>
  Duge pantalone kao i rukavi su obavezni.<br>
   Potrebno je svaki dio kože pokriti što je više moguće zbog radijacije koja slabije prolazi kroz tkaninu. <br>
   Naravno, određene dijelove tijela nemoguće je pokriti ali ono treba biti pokriveno što je više u vašoj mogućnosti. <br>
   Ukoliko je moguće nosite odjeću koju ćete u slučaju kontaminacije, kao i pri povratku kući, odbaciti na kontrolnim punktovima i presvući se u nešto drugo. <br>
   Obuću isključivo zatvorenu nosite i sa sobom prilikom obilaska lokaliteta nosite samo najvažnije stvari sa vama, ostatak će vam biti bezbijedan u prevozu kojim ćete se kretati kroz zonu.
   <br> Svaki posjetioc dobija Gajgerov brojač kako bi u svakom trenutku mogao da provjeri nivo radioaktivnosti koji vlada, kao i masku za disanje u momentima kada se obilazi dio gdje je prisutna radioaktivna prašina.<br>
    Isključivo je zabranjeno dodirivanje i branje biljaka i plodova iz zone, kao i sakupljanje zemljišta.<br>
     Radioaktivnost se najviše zadržava u drvetu i zemlji i sve se godinama taloži u zemljištu – te je ono u ovom trenutku najopasnije.<br>
      Kretat ćete se samo ustaljenim rutama i ako će vam to zazvučati dosadno jer želite da obiđete što više možete sami grad, imajte u vidu da vam sigurno neće dosaditi jer se sve glavne atrakcije obilaze na ovoj turi a imat ćete prilike čak i da se popnete na šesnaestospratnu zgradu gotovo cijelu urušenu, te imati i priliku da bacite pogled na cijeli grad sa te visine.
      <br>
       Većim dijelom ćete se voziti kombi prevozom koji će vas ostavljati u blizini samih lokaliteta koje ćete potom obilaziti. <br>
       
Prilikom izlaska iz zone svakako opet nekoliko puta prolazite kroz detektore radioaktivnosti te ukoliko se otkrije da ste kontaminirani morate odbaciti svu odjeću sa sebe i presvući se. Uobičajena tura od polaska iz Kijeva do povratka može trajati minimum 8 i maksimum 14 sati, dakle imat ćete sasvim dovoljno vremena da obiđete sve znamenitosti unutar radioaktivne zone a opet se izložiti nivou radioaktivnosti koji ne prelazi radijaciju od jednog prekookeanskog leta avionom.<br>
Svakako treba imati u vidu da se stvari rapidno mijenjaju i da je svaka posjeta zoni isključivo na odgovornost svakog posjetioca. Ono što mi možemo da uradimo jeste da svjesno obilazimo ovakve lokalitete, zarad istraživanja a ne turističkih posjeta i da iskoristimo priliku da nešto novo naučimo o svijetu u kome živimo i prilikom povratka u našu zemlju naučimo da vrijednujemo stvari oko sebe. <br>

Brankica Kilibarda</p>
         


          </div>
</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<style>
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