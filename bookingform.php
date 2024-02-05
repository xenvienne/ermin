<?php
require_once "App/config/config.php";
require_once "App/classe/Reservation.php";



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstName'], $_POST['lastName'], $_POST['phoneNumber'], $_POST['email'], $_POST['drzavljanstvo'], $_POST['departureDate'], $_POST['arrivalDate'], $_POST['numGuests'], $_POST['hotel'], $_POST['message'], $_POST['cijena'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $drzavljanstvo = $_POST['drzavljanstvo'];
    $departureDate = $_POST['departureDate'];
    $arrivalDate = $_POST['arrivalDate'];
    $numGuests = $_POST['numGuests'];
    $hotel = $_POST['hotel'];
    $message = $_POST['message'];
    $cijena = $_POST ['cijena'];

    $reservation = new Reservation();
    $ubaci = $reservation->ubaci($firstName, $lastName, $phoneNumber, $email, $drzavljanstvo, $departureDate, $arrivalDate, $numGuests, $hotel, $message,$cijena);

    if ($ubaci) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: prijavise.php");
        exit();
    }
}
?>



  
  
  
  

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
 <!--   <link rel="stylesheet" href="izgled.css" type="text/css" />-->
  <link rel="stylesheet" href="izgledCSS/bokingforma.css" type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
</head>
<body>
    <header>
        
        <br>
        <br>
        <div class="booking-form-container">
        <h2>REZERVIŠI</h2>
        <form method="post"  id="bookingForm" action="">

            <label for="firstName">Ime:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Prezime:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="phoneNumber">Mobitel:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="Drzavljanstvo">Državljanstvo:</label>
            <select id="Drzavljanstvo" name="drzavljanstvo" required>
    
            <option value="" disabled selected>Odaberite državljanstvo</option>
            <option value="Albania">Albania</option>
            <option value="Austria">Austria</option>
            <option value="Belgium">Belgium</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Croatia">Croatia</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Estonia">Estonia</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Greece">Greece</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="Ireland">Ireland</option>
            <option value="Italy">Italy</option>
            <option value="Latvia">Latvia</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Malta">Malta</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Netherlands">Netherlands</option>
            <option value="North Macedonia">North Macedonia</option>
            <option value="Norway">Norway</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Romania">Romania</option>
            <option value="Serbia">Serbia</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Spain">Spain</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            </select>

         


            <label for="departureDate">Datum polaska:</label>
            <input type="date" id="departureDate" name="departureDate" required>

            <label for="arrivalDate">Datum povratka:</label>
            <input type="date" id="arrivalDate" name="arrivalDate" required>

            <label for="numGuests">Broj osoba:</label>
                <select id="numGuests" name="numGuests" onchange="calculatePrice()">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

            <label for="hotel">Hotel:</label>
    <select id="hotel" name="hotel" required>
    <option value="" disabled selected>Odaberite hotel</option>
    
    <!-- Italija hoteli -->
    <optgroup label="Italija">
        <option value="GrandHotelLaFavorita">Grand Hotel La Favorita</option>
        <option value="TurinPalaceHotel">Turin Palace Hotel</option>
        <option value="HotelArtemide">Hotel Artemide</option>
    </optgroup>

    
    <!-- Turska hoteli -->
    <optgroup label="Turska">
        <option value="Divan Cave Hotel">Divan Cave Hotel</option>
        <option value="Concorde De Luxe Resort">Concorde De Luxe Resort</option>
        <option value="Kayakapi Premium Caves - Cappadocia">Kayakapi Premium Caves - Cappadocia </option>
    </optgroup>
    
    <!-- Grcka hoteli -->
    <optgroup label="Grcka">
        <option value="Atrium Palace Thalasso Spa Resort & Villas">Atrium Palace Thalasso Spa Resort & Villas </option>
        <option value="Palladium Boutique Hotel">Palladium Boutique Hotel</option>
        <option value="Photos of Sentido Port Royal Villas & Spa">Photos of Sentido Port Royal Villas & Spa</option>
    </optgroup>
         <!-- Njemacka hoteli -->
    <optgroup label="Njemacka">
        <option value="Pierdrei Hotel Hafencity Hamburg">Pierdrei Hotel Hafencity Hamburg</option>
        <option value="Steigenberger Hotel Am Kanzleramt">Steigenberger Hotel Am Kanzleramt</option>
        <option value="Hotel St. Annen">Hotel St. Annen</option>
    </optgroup>
    </select>



            <label for="roomType">Soba:</label>
            <select id="roomType" name="roomType">
                <option value="Standard">Standard</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Suite">Suite</option>
               
            </select>

                        
            <label for="cijena">cijena:</label>
            <input type="text" id="cijena" name="cijena" required>


            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button class="button44" type="submit">Rezerviši</button>


        </form>
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJcFCQD8DST" crossorigin="anonymous"></script>

    
      <script>
    function calculatePrice() {
        var numGuests = document.getElementById('numGuests').value;
        var cijena = document.getElementById('cijena');

        // Define your pricing logic here
        var prices = [457, 756, 996, 1200, 1600];
        var selectedPrice = prices[numGuests - 1];

        // Update the price field
        cijena.value = selectedPrice;
    }
</script>

        
        </header>
        <br>
        <br>
        <div class="boksovi">


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