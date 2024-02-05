<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css">
    <link rel="icon" type="image/png" href="travel.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
</head>

<body>
    <header>
        <nav>
            <div class="login-button">
                <a href="login.html" class="button" onclick="openLoginPopup()">Log in</a>
                <img src="" alt="Login Icon">
            </div>
            <div class="boksovi">
                <div class="box">
                    <img src="onama.jpg" alt="Image 1">
                    <h2>O NAMA</h2>
                    <p>Naš tim iskusnih stručnjaka za putovanja posvećen je tome da vaše snove pretvori u stvarnost.</p>
                    <a href="onama.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box tall-box">
                    <img src="destinacije.jpg" alt="Image 1">
                    <h2>DESTINACIJE</h2>
                    <p>Naše pažljivo odabrane destinacije protežu se od prekrasnih pejzaža švicarskih Alpa do kulturnog blaga Kjota, osiguravajući da vaša puotovanja budu jedinstvena.</p>
                    <a href="destinacije.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box">
                    <img src="booking.jpg" alt="Image 1">
                    <h2>BOOKING</h2>
                    <p>Naša online platforma prilagođena korisnicima i posvećeni tim za podršku su tu da vam pomognu da s lakoćom osigurate vašu sljedeću avanturu.</p>
                    <a href="booking.php" class="button">REZERVIRAJ</a>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="bordered-form">
    <div class="container-form">
        <div class="row">
            <h1>KONTAKT</h1>
        </div>
        <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" id="fname" name="firstname" placeholder="Ime">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                <input type="text" id="email" name="firstname" placeholder="email">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text" id="phone" name="phone" placeholder="Mobitel">
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea id="message" name="message" required></textarea>
                    <label>Poruka</label>
                </div>
            </div>
            <div class="col-xs-12">
                <button class="btn-lrg submit-btn" onclick="sendMail()">Pošalji</button>
            </div>
        </div>
    </div>
</div>


<div class="working-hours">
            <h1>Radno Vrijeme</h2>
            <h2>Ponedjeljak - Petak: 9:00 - 18:00</h2>
            <h2>Subota: 10:00 - 15:00</h2>
            <h2>Nedjelja: Zatvoreno</h2>
        </div>  
        <style>
            


.working-hours {
    margin-top: 30px;
    padding: 20px;
    background-color: #f4f4f4; 
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.working-hours h2 {
    color: #333; 
}

.working-hours p {
    margin: 8px 0;
    font-size: 16px;
    color: #555; 
}


        </style>


<script>
    function sendMail() {
        var name = document.getElementById("fname").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;

        // Check if any of the fields are empty
        if (!name || !email || !phone || !message) {
            alert("Please fill out all required fields.");
            return;
        }

       
        const serviceID = "service_92bk66r";
        const templateID = "template_fy4pxpp";  

    
        emailjs.init("mW1Lfh_EZtpIUGvwT");

        var params = {
            name: name,
            email: email,
            phone: phone,
            message: message,
        };

        emailjs.send(serviceID, templateID, params)
            .then((res) => {
                document.getElementById("fname").value = "";
                document.getElementById("email").value = "";
                document.getElementById("phone").value = "";
                document.getElementById("message").value = "";

                console.log(res); // Log the response details

                if (res.status === 200) {
                    alert("Your message was sent successfully!!");
                } else {
                    alert("Error sending the message. Please try again later.");
                }
            })
            .catch((err) => {
                console.error(err);
                alert("An error occurred. Please try again later.");
            });
    }
</script>

  






        

    </header>
    <br>
    <br>
   
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
        </header>
        <br>
       <br>
     