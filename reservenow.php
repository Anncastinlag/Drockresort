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
        #submit{
            background: #097;
            color: #fff;
            width: 200px;
        }
        .submit{
            width: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .card{
            display:flex;
            flex-direction: row;
            width: 340px;
            height: 190px;
            
        }
        .box{
            margin: 25px;
            padding: 25px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        label{
            text-align: left;
        }
        .field{
            display: inline-block;
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
    <div class="reserved">
    <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
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
           
              <?php
                    include "connect.php";
                    if(isset($_POST['search']))
                    {
                      $query = "SELECT * FROM `check_cottage` ";
                      $query_run = mysqli_query($conn,$query);

                      while($row = mysqli_fetch_array($query_run))
                      {
                          ?>
                          <tr>
                        <div class="card">
                        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['IMAGE']).'" alt="image" style="width: 100px; height: 100px;">';?></td>
                        <?php echo $row['COTTAGE_TYPE']?>
                          <p>Operating Hours: <?php echo $row['SCHED_TIME']?></p>
                          <p>Price: <span>&#8369;</span><?php echo $row['PRICE']?><br>
                          <a href="sample.php"><input type="submit"  class="submit" value="Book Now"  name="search" onclick="passvalue();" /></a>
                          <!-- <a href="sample.php">Book Now</a> -->
                      </div>
                    
                      <?php
                      }
                    } 
                    ?>
            </table>
        </form>
      </body>
      <script>
    function passvalue()
    {
        var fname = document.getElementById("ftxt").value;
        var lname = document.getElementById("ltxt").value;
        var telnum = document.getElementById("ttxt").value;
        localStorage.setItem("fname",fname);
        localStorage.setItem("last",lname);
        localStorage.setItem("phone",telnum);
        return false;
    }
</script>



      </html>