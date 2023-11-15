
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'rock Resort</title>
 <link rel="icon" href="image/favicon.ico" />
    <link rel="stylesheet" href="./reserve_hidden.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Cormorant+Garamond&family=Roboto+Mono&family=Dancing+Script&family=Rubik&family=Lora&family=Poppins:wght@100&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
  <style>
        .container{
            text-align:center;
        }
        .btn{
            margin:25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16px;
        } 
        .heros{
            display: block;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .heros h5{
          text-align: center;
          padding: 15px;
        }
        label{
            text-align: left;
        }
        .field{
            display: inline-block;
        }
        #book a{
          text-decoration: none;
        }
        .avail-ser {
          text-align:center;
        }
        .NGE{
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-size: 16px;
          padding-left: 25px;
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
        <h1>Book for Reservation Now!</h1>
</div>
</div>
<form action="" form action="" method="POST" enctype="multipart/form-data">
        <div class="box">
        <div class="field">
            <label for="name">Fullname:
                <input type="text" class="form-control" id="ftxt" />
            </label>
            </div>
            <div class="field">
            <label for="teln">Contact Number:
                <input type="tel" class="form-control" id="ttxt" />
            </label>
            </div>
            <div class="field">
            <label for="last">Reserve Date:
                <input type="date" class="form-control" id="ltxt" />
            </label>
            </div>
           <div class="field">
           <input type="submit" id="submit" class="form-control" value="Check Available"  name="search" />
           </div>
        </div>
<!-- 
        <div class="item-private">
        <div class="item-rows">
      <img src="image/bakground/privatepool.jpg" alt="" srcset=""><div>
        <div class="private-info">
          <h2>Pool and Cottage</h2>
            <p>Kids and Adult <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p> 
              <a class="btn btn-primary" data-toggle="collapse" href="sample.php" role="button">Reserve Now! </a>
            </div> -->
   <?php
   include "connect.php";
   if(isset($_POST['search']))
   {
    $query = "SELECT * FROM `exclusive` ";
    $query_run = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
       <div class="heros">
        <h5>PUBLIC AREA DAY</h5>
        <div class="avail-ser">
        <?php echo $row['PUBLIC_AREA_DAY']?><br>
          <div class="avail-ser">
          <a href="Exclusive.php">Book Now</a>
          </div>
          </div>

        <div class="heros">
        <h5>PUBLIC AREA NIGHT</h5>
        <div class="avail-ser">
        <?php echo $row['PUBLIC_AREA_NIGHT']?><br>
        <div class="avail-ser">
          <a href="Exclusive.php">Book Now</a>
        </div>
        </div>

       <div class="heros">
        <h5>PRIVATE DAY</h5>
        <div class="avail-ser">
        <?php echo $row['PRIVATE_DAY']?><br>
        <div class="avail-ser">
          <a href="Exclusive.php">Book Now</a>
        </div>
        </div>

        <div class="heros">
        <h5>PRIVATE NIGHT</h5>
        <div class="avail-ser">
        <?php echo $row['PRIVATE_NIGHT']?><br>
        <div class="avail-ser">
          <a href="Exclusive.php">Book Now</a>
        </div>
        </div>

        <div class="heros">
        <h5>PAVILLION</h5>
        <div class="avail-ser">
        <?php echo $row['PAVILLION']?><br>
        <div class="avail-ser">
          <a href="Exclusive.php">Book Now</a>
        </div>
    </div>
    </div>
    <?php
    }
   } 
   ?>
</div>
<?php
   include "connect.php";
  
    $query = "SELECT `DATE_RESERVED` FROM `new_reservation` ";
    $query_run = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
      <table>
        <tr>
          <td> 
          <div class="luh">
            <div class="NGE">
        <p>Occupied Dates</p>
        <?php echo $row['DATE_RESERVED']?>
        </div>
      </td>
        </tr>
    </table>
   
    <?php
    } 
  
   ?>
      </html>