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
margin-right: 8px;
}
.container h1{
  text-align: center;
  padding-top: 15%;
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
.faq-img img{
  width: 500px;
  text-align: center;
  padding: 25px;
  margin-left: 30%;
}
.faq-item{
margin-bottom: 20px;
margin-top: 20px;
font-size: 15px;
}
.faq-item h3{
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 15px;
}
.faq-body{
display: none;
margin-top: 15px;
font-size: 15px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.faq-wrapper{
width: 100%;
}
.faq-inner{
padding: 30px;
}
.faq-plus i{
float: right;
font-size: 15px;
cursor: pointer;
}
hr{
background-color: #9b9b9b;
}
.contact-section{
padding: 25px;
}
.contact-section li{
font-size: 30px;
font-family: 'Cormorant Garamond', serif;
color: #000;
list-style: none;
text-align: center;
}
.contact-section h1{
font-size: 25px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
text-align: center;
padding-top: 10%;
}
.drock-location{
  margin-left: 5%;
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
.contacts{
text-align: left;
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
list-style-type: none;
padding-bottom: 15px;
}
.contacts a{
text-decoration: none;
color: #fff;;
}
.legal{
text-align: right;
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
.container h1{
font-size: 15px;
padding-top: 30%;
}
.container p{
  font-size: 10px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  display: block;
  margin: auto;
}
.faq-img img{
  width: 200px;
  display: block;
  margin: auto;
}
.faq-body{
font-size: 10px;
}
.faq-wrapper{
width: 100%;
}
.faq-item h3{
font-size: 12px;
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
      <div class="about-section">
        <div class="container">
        <h1>Do You Have Question?</h1>
        <p>Below you'll find some freaquent question that are being answered. <br> If you still don't find the answer feel free to contact us.</p>
        <div class="faq-img">
        <img src="image/bakground/question-marks.png" alt="">
</div>
        <div class="faq-wrapper">
          <div class="faq-inner">
            <div class="faq-item">
              <h3>
              Panget ba 'ko?
                <span class="faq-plus"><i class="fas fa-angle-down"></i></span>
              </h3>
              <div class="faq-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
              Kapalit-palit ba ako?
                <span class="faq-plus"><i class="fas fa-angle-down"></i></span>
              </h3>
              <div class="faq-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Then why?
                <span class="faq-plus"><i class="fas fa-angle-down"></i></span>
              </h3>
              <div class="faq-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Why?
                <span class="faq-plus"><i class="fas fa-angle-down"></i></span>
              </h3>
              <div class="faq-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Chos lang HAHAHAHAHA
                <span class="faq-plus"><i class="fas fa-angle-down"></i></span>
              </h3>
              <div class="faq-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






</option>
           </select>
        </div>
        </label>
        </div>
</div>
</div>
<!-- <div class="contact-section">
  <h1>For more inquiries please contact us on:</h1>
          <li><i class="fa-solid fa-phone"></i>Contact Number: 09917-685-58-47</li>
          <li><i class="fa-solid fa-envelope"></i>Email: therockresortandlodge@gmail.com</li>      
          <li><i class="fa-solid fa-location-dot"></i>Address: Sitio Tanag San Isidro Rodriguez Rizal</li>
</div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.1564200497187!2d121.15190707577555!3d14.760215973147645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397a4b0b242a55f%3A0x33a3c03c23a2c2c2!2sThe%20Rock%20Resort!5e0!3m2!1sen!2sph!4v1669690070975!5m2!1sen!2sph" class="drock-location" width="1150" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->
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