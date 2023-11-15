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
</head>
<body>
<style>
* {
padding: 0;
margin: 0;
}
/* 
.about-section { 
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
.drock{
font-size: 15px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
text-align: center;
padding-top: 5px;
}
.container p::first-letter {
font-size: 300%;
color: #8A2BE2;
}
.container p{
line-height: 1.8;
text-align: justify;
padding-left: 15%;
padding-right: 15%;
font-size: 25;
padding-bottom: 0;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.mission p{
text-align: center;
font-size: 35px;   
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
padding-top: 5%;
line-height: 1.8;
padding-left: 10%;
padding-right: 15%;
}
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
color: #fff;
font-family: 'Cormorant Garamond', serif;
padding: 25px 0 25px 45px;
margin-left: 8%;
}
.contacts h1{
padding-bottom: 20px;
font-size: 30px;
}
.contacts li{
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
@media screen and (max-width: 900px){
.Bars{
width: 100%;
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
.container h1{
padding-top: 35%;
font-size: 20px;
}
.container h2{
font-size: 15px;
}
.logo img{
width: 50px;
height: 20px;
padding-left: 0px;
padding-top: 10px;
}
.contacts{
padding-left: 15%;
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
          <nav>
          <ul>
          <li><b><a href="index.php">HOME</a></b></li>
            <li><b><a href="contact-us.php">CONTACT</a></b></li>
            <li><b><a href="about.php">ABOUT</a></b></li>
            <li><b><a href="FAQ.php">FAQ</a></b></li>
          </ul>
    </nav>
    
        </div>
      <div class="about-section">
        <div class="container">
        <h1>About Us</h1>
        <h2 class="drock">D'rock Resort Management</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit pellentesque leo vel sollicitudin. Praesent pretium mi id aliquet consequat. Mauris et eros dignissim, consequat ligula at, pretium nunc. Etiam tortor libero, pellentesque ultrices elementum et, commodo at justo. Nunc ac nunc non quam venenatis iaculis. Fusce mattis lorem ac justo faucibus venenatis. Ut iaculis, erat eget tempor auctor, justo sapien elementum erat, ac egestas mauris nisl eu dui.</p>

      <p> Phasellus suscipit sapien in purus laoreet eleifend. Nullam efficitur sit amet sapien at elementum. Vestibulum eu interdum tortor. Donec faucibus imperdiet quam. Vivamus sem purus, pharetra et nibh ac, commodo mollis dui. Sed felis dui, sodales vel risus laoreet, vestibulum iaculis odio. Donec pharetra, ex nec ornare consectetur, lacus dui maximus leo, sit amet mattis lacus urna vitae felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam non rhoncus nunc, sit amet vestibulum neque. Aliquam eget sapien est. Proin semper ex et erat viverra, quis elementum mauris ornare.</p>
      
    </div>
      <div class="mission">
        <p>“To be financially successful through great people consistently delivering outstanding food, drinks and service in an inviting atmosphere, making every guest loyal.”</p>
        <p class="last"> -PS. not mine hihi ;)</p>

      </div>
      
      <section class="footer">
        <div class="icons">
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-pinterest"></i></a></li>
        </div>
        <div class="contacts">
          <h1>Contacts us on:</h1>
         <li><a href=""><i class="fa-solid fa-phone"></i>09911456548</a></li>
         <li><a href=""><i class="fa-solid fa-envelope"></i>drockresort@gmail.com</a></li>
         <li><a href=""><i class="fa-solid fa-location-pin"></i>Sitio Tanag San Jose Rodrigez Rizal</i></a></li>
      </div>
            <div class="legal">
                <li><a href="Terms-and-condition.php">Copyright <i class="fa-solid fa-copyright"></i>2022 D'rock Resort Managemnt.</a></li>
                <li><a href="Terms-and-condition.php">Privacy policy. Terms & condition.</a></li>
             </div>
          
    </section>
       </div>
 </section>
</body>

</html>