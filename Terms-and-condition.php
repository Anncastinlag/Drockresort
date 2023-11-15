<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'rock Resort</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Cormorant+Garamond&family=Roboto+Mono&family=Dancing+Script&family=Rubik&family=Lora&family=Poppins:wght@100&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@100&family=Crimson+Text&family=Montserrat:wght@100&family=Quicksand:wght@300&family=Raleway:wght@100;200;300&display=swap');
* {
padding: 0;
margin: 0;
}

/* .about-section { 
background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(image/bakground/pool9.jpg);
background-size: cover;
height: 80vh;
background-position: center;
} */
.logo {
float: left;
cursor: pointer;
position: absolute;
padding-top: 15px;
padding-left: 25px;
}
.menu-bar {
overflow: hidden;
background-color: #fff;
position: fixed;
text-align: right;
width: 100%;
height: 8%;
border-bottom: 1px solid #ddd;
box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
}
.menu-bar ul {
display: inline-flex;
margin-right: 25px;
text-align: center;
}
.menu-bar ul li {
list-style-type: none;
padding: 25px;
text-align: center;
margin-bottom:25%;
}

.menu-bar ul li a {
position: relative;
text-decoration: none;
display: inline-block;
color: #000;
padding: 4px 5px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 16px;
}
.menu-bar a:after{
content: '';
position: absolute;
background: #f1c40f;
height: 3px;
width: 0;
left: 0;
bottom: -1px;
transition: 0.3s;
}
.menu-bar a:hover:after{
width: 105%;
}
i {
margin-right: 8px;
}
.container h1{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
padding-top: 35%;
text-align: center;
color: #000;

}
/* End */
        .footer{
        display: inline-block;
        width: 100%;
        margin-top: 45%;
        background-color: #000;
      }
      .footer .icons{
        text-align: center;
      }
      .icons{
        border-bottom: 1px solid #fff;
        background: #000;
      }
      .icons li{
        display: inline-block;
        align-items: center;
        padding: 5px 0 5px 7px;
        margin-top: 25px;
        margin-bottom: 25px;
        margin-right: 9px;
        border: 1px solid #ddd;
        border-radius: 20%;
      }
      .icons a{
        color: #fff;
        
      }
      .footer .contacts{
        float: left;
      }
      .legal{
        float: right;
        list-style-type: none;
        padding: 25px 36px 25px 0;
        margin-right: 8%;
        
      }
      .legal li{
        padding-bottom: 15px;
      }
      .legal a{
        font-family: 'Cormorant Garamond', serif;
        text-decoration: none;
        color: #fff;
        justify-content: space-around;
        list-style-type: none;
      }
      .contacts{
        color: #000;
        font-family: 'Cormorant Garamond', serif;
        padding: 25px 0 25px 45px;
        margin-left: 8%;
      }
      .contacts h1{
        color: #fff;
        padding-bottom: 20px;
        font-size: 30px;
      } .contacts li{
        font-family: 'Cormorant Garamond', serif;
        text-decoration: none;
        color: #fff;
        list-style-type: none;
        padding-bottom: 15px;
      }
      .contacts a{
        text-decoration: none;
        color: #fff;;
      }
      .terms-and-condition{
        padding-top: 10%;
        text-align: left;
        padding-left: 10%;
        padding-right: 10%;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
      .terms-and-condition ul{
        padding-left: 65px;
      }
      .terms-and-condition h2{
       padding-bottom: 25px;
      }
      .greet{
        padding-bottom: 25px;
      }
      .terms-and-condition h3{
       padding-top: 25px;
      }
      .terms-and-condition p{
        text-align: justify;
        line-height: 1.8;
        font-size: 15px;
      }
@media all and (max-width: 900px){
  .Bars{
          width: 100%;
        }
        .about-section{
              height: 60vh;
             
        }
        .menu-bar{
            width:100%;
        }
        .menu-bar ul {
          display: inline-flex;
          margin-right: 15px;
          text-align: center;
        }
        .menu-bar ul li a{
            font-size: 10px;
            padding: 2px;
        }
        .menu-bar ul li {
          list-style-type: none;
          padding-right: 0px;
          text-align: right;
          margin-bottom:15px;
        }
.container h1{
    color: #090909;
    font-size: 20px;
    padding-top: 50%;

}
.logo img{
    width: 40px;
    height: 15px;
    padding-left: 0px;
    padding-top: 6px;
}
.contacts{
  padding-left: 10%;
text-align: center;
margin: auto;
}
.contacts h1{
color: #fff;
padding-bottom: 20px;
font-size: 20px;
}
.legal{
  padding: auto;
  text-align: center;
  margin: auto;
}
}
</style>
    <section class="Bars">
    <div class="menu-bar">
        <div class="logo">
          <img src="image/drock.png" alt="" width="100px" height="50px"></div>
          <ul>
          <li><b><a href="index.php">HOME</a></b></li>
            <li><b><a href="contact-us.php">CONTACT</a></b></li>
            <li><b><a href="about.php">ABOUT</a></b></li>
            <li><b><a href="FAQ.php">FAQ</a></b></li>
          </ul>
        </div>
      <div class="about-section">
        <div class="container">
<div class="terms-and-condition">
<h2><strong>Terms and Conditions</strong></h2>

<p>Welcome to Drock Resort!</p>

<p>These terms and conditions outline the rules and regulations for the use of Drock Resort's Website, located at https://drockresort.fun/.</p>

<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Drock Resort if you do not agree to take all of the terms and conditions stated on this page.</p>

<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

<h3><strong>Cookies</strong></h3>

<p>We employ the use of cookies. By accessing Drock Resort, you agreed to use cookies in agreement with the Drock Resort.</p>

<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

<h3><strong>License</strong></h3>

<p>Unless otherwise stated, Drock Resort and/or its licensors own the intellectual property rights for all material on Drock Resort. All intellectual property rights are reserved. You may access this from Drock Resort for your own personal use subjected to restrictions set in these terms and conditions.</p>

<p>You must not:</p>
<ul>
    <li>Republish material from Drock Resort</li>
    <li>Sell, rent or sub-license material from Drock Resort</li>
    <li>Reproduce, duplicate or copy material from Drock Resort</li>
    <li>Redistribute content from Drock Resort</li>
</ul>

<p>We may collect:</p>
<ul>
    <li>Your personal information and,</li>
    <li>Your valid ID's</li>
</ul>


</div>
<section class="footer">
  <div class="icons">
      <li><a href="https://www.facebook.com/DROCKResort"><i class="fa-brands fa-instagram"></i></a></li>
      <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href=""><i class="fa-brands fa-pinterest"></i></a></li>
  </div>
  <div class="contacts">
    <h1>Contacts us on:</h1>
   <li><a href=""><i class="fa-solid fa-phone"></i>0905-271-3238</a></li>
   <li><a href=""><i class="fa-solid fa-envelope"></i>drockresort2022@gmail.com</a></li>
   <li><a href=""><i class="fa-solid fa-location-pin"></i>Sitio Tanag Brgy. San Isidro, Rodriguez Rizal</i></a></li>
</div>
<div class="legal">
          <li><a href="Terms-and-condition.php">Copyright <i class="fa-solid fa-copyright"></i>2022 D'rock Resort Managemnt.</a></li>
          <li><a href="Terms-and-condition.php">Privacy policy. Terms & condition.</a></li>
       </div>

    </section>





</body>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
                        <script>
                          const swiper = new Swiper('.swiper', {
                              autoplay: {
                                  delay: 6000,
                                  disableOnInteraction: false,
                              },
                              // Optional parameters
                              loop: true,

                              // If we need pagination
                              pagination: {
                                  el: '.swiper-pagination',
                                  clickable: true,
                              },

                              // Navigation arrows
                              navigation: {
                                  nextEl: '.swiper-button-next',
                                  prevEl: '.swiper-button-prev',
                              },


                          });
                          </script>

</script>
<script type="text/javascript" src="jquery-3.6.0.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>

<script>
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    </script>
</html>