<?php
include "connect.php";

if(isset($_POST['submit'])) {
    $GUEST_NAME = $_POST['GUEST_NAME'];
    $CONTACT_NO = $_POST['CONTACT_NO'];
    $ADULT = $_POST['ADULT'];
    $KID = $_POST['KID'];
    $TYPE = $_POST['TYPE'];
    $ROOM_TYPE = $_POST['ROOM_TYPE'];
    $RQUANTITY = $_POST['RQUANTITY'];

    $sql = "INSERT INTO `new_reservation`(`ID`, `GUEST_NAME`, `CONTACT_NO`, `ADULT`, `KID`, `TYPE`, `ROOM_TYPE`,  `RQUANTITY`) VALUES (NULL,'$GUEST_NAME','$CONTACT_NO','$ADULT','$KID','$TYPE','$ROOM_TYPE','$RQUANTITY')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: reserve.php?msg=You have successfully book a reservation. Please save the date and prepare the payment thank you.");
        exit();
    }
    else{
        echo "Failed" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'rock Resort</title>
    <link rel="stylesheet" href="./reserve_hidden.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Cormorant+Garamond&family=Roboto+Mono&family=Dancing+Script&family=Rubik&family=Lora&family=Poppins:wght@100&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
</head>
<body>
    <section class="Bars">
    <div class="menu-bar">
        <div class="logo">
          <img src="image/drock.png" alt="" width="100px" height="50px"></div>
          <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="contact-us.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
          </ul>
        </div>
      <div class="about-section">
        <div class="container">
        <h1>Book for Reservation Now!</h1>
</div>
</div>
<div class="booking-reserve-info"> 
    <div class="reserve">
    <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
    <h2>Please provide accurate information.</h2> 
      <p>D'rock Pool Form</p> 
       <form action="" method="POST"> <!--name="myForm" onsubmit="return validation()"> -->
       <label for="fullname">Fullname: <br>
        <input type="text" name="GUEST_NAME" required id="Guest_Name" ></label>

        <label for="reserve">Day Time Schedule: <br>
        <select name="TYPE" id="Day_Reservation" required>
          <option value="" selected hidden>Select</option>
          <option value="DAY">Day Time</option>
          <option value="NIGHT">Night Time</option>
        </select>
        </label>
       

        <label for="re" class="re">Reservation date: <br>
        <input type="date" name="DATE_RESERVED" id="checkin" min="12-25-2022" required></label>
        <br><br>
        <label for="cpnum">Cellphone No.: <br>
        <input type="tel" name="CONTACT_NO" pattern="[0-9]{11}" required> </label>

        <label for="cpnum">Adult/s: <br>
        <input type="number" name="ADULT" id="a" required></label>

        <label for="cpnum">Kid/s: <br>
        <input type="number" name="KID" id="k" required></label>

        <!-- <div class="cottage-reserve">
          <h2>D'rock Cottage</h2>
          <p>or you can leave it blank.</p> <br>
        <label for="cot" class="cot">Cottage Type: <br> 
        <select name="COTTAGE_TYPE" id="cot-type">
          <option value="" selected hidden>Select</option>
          <option value="NIPA ROCK">Nipa Rock 8-10 Persons</option>
          <option value="PAVILLION">Pavillion 10-15 Persons</option>
          <option value="NIPA ROCK 2">Nipa Rock 15-20 Persons</option>
          <option value="NIPA ROCK 2">Nipa Rock 15-20 Persons</option>
        </select>
        </label>
        <label for="cpnum">Cottage Quantity: <br>
        <input type="number" name="CQUANTITY" id="a"></label>
        </div> -->

        <div class="cottage-reserve">
          <h2>D'rock Room</h2>
          <p>or you can leave it blank.</p> <br>
        <label for="cot" class="cot">Room Type: <br> 
        <select name="ROOM_TYPE" id="cot-type">
          <option value="" selected hidden>Select</option>
          <option value="1BED ROOM">1 Bed w/ Colored TV + Comfort Room</option>
          <option value="2BED ROOM">2 Beds good w/ Colored TV + Comfort Room</option>
          <option value="1BED ROOM">1 Bed w/o + Comfort Room</option>
        </select>
        </label>
        <label for="cpnum">Room Quantity: <br>
        <input type="number" name="RQUANTITY" id="a"></label>
        </div><br><br><br>
     

        <button type="submit"  id="mySubmit" class="btn btn-success" name="submit" >Submit</button>
    
        </table>
            </form>
    </div>
  </div>
    </div>
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
          <li><a href="">Copyright <i class="fa-solid fa-copyright"></i>2022 D'rock Resort Managemnt.</a></li>
          <li><a href="">Privacy policy. Terms & condition.</a></li>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</script>  
<script type="text/javascript" src="jquery-3.6.0.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
      $("#a,#k, #p").keyup(function(){

        var tot =0;
        var i = Number($("#a").val());
        var e = Number($("#k").val());
        var y = Number($("#p").val());
        var tot = i + e + y;
        $("#tot ").val(tot);
      });
    });
  </script>
</html>