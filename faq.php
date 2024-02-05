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
    <link rel="stylesheet" href="izgledCSS/faq.css" type="text/css"/>
    <link rel="icon" type="image/png" href="travel.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-r4JSEV8OLcW2TToJ8dKFPCgAqOIFKgoLNFa6eC/7E9RHIf1Q5U6h" crossorigin="anonymous">
    <script>
        function openLoginPopup() {
            window.open('login.php', 'LoginWindow', 'width=400,height=300');
        }
    </script>


<section class="faq-section">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="faq-item">
    <button class="accordion">Kako mogu rezervirati putovanje putem Panorama Travels?</button>
    <div class="panel">
      <p>Možete rezervirati putovanje putem naše web stranice, pozivom našeg korisničkog servisa ili posjetom našem fizičkom uredu.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="accordion">Koje vrste putovanja nudi Panorama Travels?</button>
    <div class="panel">
      <p>Panorama Travels nudi različite vrste putovanja, uključujući ture, krstarenja, paket aranžmane, i individualna putovanja. Saznajte više o našim ponudama na web stranici.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="accordion">Kako se mogu informirati o aktualnim ponudama i popustima?</button>
    <div class="panel">
      <p>Redovito pratite našu web stranicu i društvene mreže kako biste bili u toku s najnovijim ponudama, popustima i posebnim događanjima.</p>
    </div>
  </div>

  <div class="faq-item">
  <button class="accordion">Kakva je politika otkazivanja rezervacija?</button>
  <div class="panel">
    <p>Detalji o politici otkazivanja mogu se pronaći u uvjetima i odredbama naše agencije. Preporučujemo da ih pročitate prije nego što rezervirate putovanje.</p>
  </div>
</div>

<div class="faq-item">
  <button class="accordion">Koje vrste plaćanja prihvaćate?</button>
  <div class="panel">
    <p>Prihvaćamo različite načine plaćanja, uključujući kreditne kartice, debitne kartice i bankovne transfere. Detalji o plaćanju nalaze se na našoj web stranici.</p>
  </div>
</div>

<div class="faq-item">
  <button class="accordion">Mogu li prilagoditi svoje putovanje prema vlastitim preferencijama?</button>
  <div class="panel">
    <p>Da, pružamo mogućnost prilagodbe putovanja prema vašim željama. Obratite se našem timu za više informacija o personalizaciji putovanja.</p>
  </div>
</div>

<div class="faq-item">
  <button class="accordion">Imate li usluge osiguranja za putovanje?</button>
  <div class="panel">
    <p>Da, nudimo osiguranje za putovanje kao dodatnu opciju prilikom rezervacije. Detalji i cijene osiguranja dostupni su na našoj web stranici.</p>
  </div>
</div>

<div class="faq-item">
  <button class="accordion">Što učiniti u hitnim situacijama tijekom putovanja?</button>
  <div class="panel">
    <p>Naša hitna linija je dostupna 24/7. Kontaktirajte nas odmah ako imate hitnu situaciju tijekom putovanja, a kontaktne informacije nalaze se na web stranici i u putničkoj dokumentaciji.</p>
  </div>
</div>

<div class="faq-item">
  <button class="accordion">Kako mogu dobiti dodatne informacije o destinacijama koje planiram posjetiti?</button>
  <div class="panel">
    <p>Naši agenti su stručni i rado će vam pružiti informacije o destinacijama. Također, možete pronaći korisne informacije na našoj web stranici i blogu.</p>
  </div>
</div>

<div class="faq-item">
  <button class="accordion">Kako pružate podršku nakon što se vratim s putovanja?</button>
  <div class="panel">
    <p>Ako imate bilo kakve pritužbe, pohvale ili trebate dodatne informacije nakon putovanja, slobodno nas kontaktirajte putem e-pošte ili telefona. Naš tim za korisničku podršku stoji vam na raspolaganju.</p>
  </div>
</div>

  <!-- Nastavite s ostalim pitanjima -->

</section>

  
  <script>
      
  var acc = document.querySelectorAll('.accordion');

for (var i = 0; i < acc.length; i++) {
  acc[i].addEventListener('click', function() {
    this.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.display === 'block') {
      panel.style.display = 'none';
    } else {
      panel.style.display = 'block';
    }
  });
}

  </script>
  

  

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