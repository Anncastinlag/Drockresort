<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'rock Resort</title>
    <link rel="icon" href="image/favicon.ico" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Cormorant+Garamond&family=Roboto+Mono&family=Dancing+Script&family=Rubik&family=Lora&family=Poppins:wght@100&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
height: 10%;
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
margin-right: 10px;
}
.container h1{
  text-align: center;
  font-size: 45px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: #000;
}
.container p{
  text-align: center;
  font-size: 15px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: #000;
}
.contact-section{
padding-top: 5%;
}
.contact-section h1{
padding-top: 10%;
font-size: 45px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
text-align: center;
}
.contact-section p{
  text-align: center;
  font-size: 15px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: #000;
}
.inquiries{
  display: flex;
 margin: 5% 15% 0 15%;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
 background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)), url(image/bakground/pool4.jpg);
 background-size: cover;
height: 50%;
background-position: center;
}
.drock-inquiries{
  padding-top: 7%;
}
.drock-inquiries li{
  text-align: left;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  list-style: none;
  padding: 25px 35px;
  color: #fff;
  font-size: 15px;
}
/* End */
.footer{
display: inline-block;
width: 100%;
margin-top: 45%;
background-color: #000;
}
.icons{
border-bottom: 1px solid #fff;
background: #000;
text-align: center;
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
  padding-top: 20px;
}
.menu-bar ul li {
padding: 5px;
}
.menu-bar ul li a{
font-size: 10px;
padding: 2px;
}
.logo img{
width: 60px;
height: 30px;
padding-top: 6px;
}
.contact-section{
  padding-top: 30%;
}
.contact-section  h1{
  display: block;
  margin: auto;
font-size: 15px;
}
.contact-section  p{
  font-size: 10px;
  color: #000;
}
.inquiries{
  background: none;
  box-shadow: none;
  display: block;
  padding: 0%;
  margin: auto;
}
.drock-inquiries li{
  padding-top: 0%;
  color: #000;
}
.drock-location{
  width: 390px;
  height: 242px;
  display: block; margin: auto;
}
.icons li{
  font-size: 15px;
}
.contacts h1{
padding-bottom: 10px;
font-size: 20px;
}
.footer{
  text-align: center;
}
.contact-section h1{
font-size: 15px;
padding-top: 0%;
}
.contact-section li{
font-size: 15px;
text-align: center;
}
.contacts h1{
padding-bottom: 20px;
font-size: 20px;
}
.contacts{
text-align: center;
padding-left: 0%;
}
.legal{
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
<div class="contact-section">
<h1>For more inquiries</h1>
<p>please contact us on:</p>
  <div class="inquiries">
  <div class="drock-inquiries">

          <li><i class="fa-solid fa-phone"></i>09917-685-58-47</li>
          <li><i class="fa-solid fa-envelope"></i>therockresortand <br> lodge@gmail.com</li>      
          <li><i class="fa-solid fa-location-dot"></i>Sitio Tanag San Isidro Rodriguez Rizal</li>
</div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.1564200497187!2d121.15190707577555!3d14.760215973147645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397a4b0b242a55f%3A0x33a3c03c23a2c2c2!2sThe%20Rock%20Resort!5e0!3m2!1sen!2sph!4v1669690070975!5m2!1sen!2sph" class="drock-location" width="580" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
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
<script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>

<script type="text/javascript" src="jquery-3.6.0.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>

<script>
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    </script>
</html>