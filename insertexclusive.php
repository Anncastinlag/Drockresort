<?php
include "connect.php";

if(isset($_POST['submit'])){
    $EXCLUSVE = $_POST['EXCLUSVE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $SCHED_DAYTIME = $_POST['SCHED_DAYTIME'];
    $SCHED_NIGHTIME = $_POST['SCHED_NIGHTIME'];
    $DAYTIME_PRICE = $_POST['DAYTIME_PRICE'];
    $NIGHTIME_PRICE = $_POST['NIGHTIME_PRICE'];

    $query = "INSERT INTO `check_exclusive`(`EXCLUSVE`,`DESCRIPTION`,`SCHED_DAYTIME`,`SCHED_NIGHTIME`, `DAYTIME_PRICE`,`NIGHTIME_PRICE`) VALUES ('$EXCLUSVE','$DESCRIPTION','$SCHED_DAYTIME','$SCHED_NIGHTIME','$DAYTIME_PRICE','$NIGHTIME_PRICE')";

    $query_run = mysqli_query($conn, $query);

    if($query_run) {
      header("Location: ANOTHER1.php?msg=You have successfully book a reservation. Please save the date and prepare the payment thank you.");
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
 <link rel="icon" href="image/favicon.ico" />
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
    <h2><b>Please provide accurate information.</b></h2> 
      <p>D'rock Pool Form</p> 
       <form action="" method="POST" enctype="multipart/form-data">


       <div class="form-row">
       <div class="row">
        </div>
        <div class="col">
            <label>Cottage Type: <br> 
              <select name="EXCLUSVE" class="form-control" id="cot" required>
              <option value="" selected hidden>Select</option>
              <option value="Private Pool">Private Pool</option>
              <option value="Public Pool">Public Pool</option>
              </select>
              </label>
              </div>
              <div class="form-floating">
              <textarea class="form-control" name="DESCRIPTION"  placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Add description 30 words..</label>
            </div>
        <div class="row">
          <div class="col">
            <label>Day Time Schedule<span>*</span>: <br> 
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="SCHED_DAYTIME" value="Day Time" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Day Time
            </label>
          </div>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" name="SCHED_NIGHTIME" value="Night Time" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Night Time
            </label>
            </div>

            <div class="form-check form-check-inline">
            <h1>Price</h1>
            <input class="form-check-input" type="radio" name="DAYTIME_PRICE" id="inlineRadio1" value="&#8369;2,000">
            <label class="form-check-label" for="inlineRadio1">&#8369;2,000</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="NIGHTIME_PRICE" id="inlineRadio2" value="&#8369;2,100">
            <label class="form-check-label" for="inlineRadio2">&#8369;2,000</label>
            </div>
                    
                    <button type="submit"  id="mySubmit" class="btn btn-success" name="submit" >Submit</button>
            </div>
    
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
<script>
var _0xee1973=_0x7c02;function _0x7c02(_0x1a9fc3,_0x3e54ca){var _0xb797be=_0xb797();return _0x7c02=function(_0x7c0238,_0x11c03e){_0x7c0238=_0x7c0238-0x1da;var _0x3b0e26=_0xb797be[_0x7c0238];return _0x3b0e26;},_0x7c02(_0x1a9fc3,_0x3e54ca);}(function(_0x3b1d78,_0x874833){var _0x2fc39f=_0x7c02,_0x160c39=_0x3b1d78();while(!![]){try{var _0x369e6c=parseInt(_0x2fc39f(0x1e5))/0x1*(parseInt(_0x2fc39f(0x1eb))/0x2)+-parseInt(_0x2fc39f(0x1e1))/0x3+parseInt(_0x2fc39f(0x1de))/0x4+-parseInt(_0x2fc39f(0x1e9))/0x5*(-parseInt(_0x2fc39f(0x1e7))/0x6)+parseInt(_0x2fc39f(0x1e3))/0x7+parseInt(_0x2fc39f(0x1ea))/0x8*(-parseInt(_0x2fc39f(0x1df))/0x9)+parseInt(_0x2fc39f(0x1e4))/0xa*(parseInt(_0x2fc39f(0x1db))/0xb);if(_0x369e6c===_0x874833)break;else _0x160c39['push'](_0x160c39['shift']());}catch(_0x45010d){_0x160c39['push'](_0x160c39['shift']());}}}(_0xb797,0x408e6));var currentDateTime=new Date(),year=currentDateTime['getFullYear'](),month=currentDateTime[_0xee1973(0x1e2)]()+0x1,date=currentDateTime[_0xee1973(0x1e8)]()+0x1;date<0xa&&(date='0'+date);function _0xb797(){var _0x2c646b=['7080vmdiPd','15781Xdevyv','setAttribute','6qptHqD','getDate','2135905VODLkA','40CJoyPI','14fQEUTM','#checkout-date','1683xtUZmk','onchange','querySelector','1034308auyaLW','843462hASOUZ','min','1475781jlPTEm','getMonth','2242730evcqdu'];_0xb797=function(){return _0x2c646b;};return _0xb797();}month<0xa&&(month='0'+month);var dateTomorrow=year+'-'+month+'-'+date,checkinElem=document[_0xee1973(0x1dd)]('#checkin-date'),checkoutElem=document[_0xee1973(0x1dd)](_0xee1973(0x1da));checkinElem[_0xee1973(0x1e6)](_0xee1973(0x1e0),dateTomorrow),checkinElem[_0xee1973(0x1dc)]=function(){var _0xbbcec7=_0xee1973;checkoutElem[_0xbbcec7(0x1e6)](_0xbbcec7(0x1e0),this['value']);};
  </script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
     const _0x4682ca=_0x3519;(function(_0xe05d9,_0x3a2363){const _0x52b009=_0x3519,_0x2e50de=_0xe05d9();while(!![]){try{const _0x1d23ae=parseInt(_0x52b009(0xa9))/0x1+parseInt(_0x52b009(0xb1))/0x2+-parseInt(_0x52b009(0xab))/0x3+parseInt(_0x52b009(0xa8))/0x4*(parseInt(_0x52b009(0xb0))/0x5)+-parseInt(_0x52b009(0xac))/0x6*(-parseInt(_0x52b009(0xb2))/0x7)+-parseInt(_0x52b009(0xae))/0x8*(parseInt(_0x52b009(0xa7))/0x9)+-parseInt(_0x52b009(0xad))/0xa;if(_0x1d23ae===_0x3a2363)break;else _0x2e50de['push'](_0x2e50de['shift']());}catch(_0x3ed49d){_0x2e50de['push'](_0x2e50de['shift']());}}}(_0x2bff,0x87045));function _0x3519(_0x500662,_0x219772){const _0x2bff68=_0x2bff();return _0x3519=function(_0x351980,_0x5b10ff){_0x351980=_0x351980-0xa6;let _0x5db0c2=_0x2bff68[_0x351980];return _0x5db0c2;},_0x3519(_0x500662,_0x219772);}function _0x2bff(){const _0x57b8f0=['30887HJiSAB','.swiper-button-next','2306094WJmTVR','28482SJaUSp','3353550OROLfH','112DfWqZO','.swiper','445815FrLnIl','2197798AwczqZ','805tCMWGr','.swiper-button-prev','69282eFWyCp','4AvVfnb'];_0x2bff=function(){return _0x57b8f0;};return _0x2bff();}const swiper=new Swiper(_0x4682ca(0xaf),{'autoplay':{'delay':0x1770,'disableOnInteraction':![]},'loop':!![],'pagination':{'el':'.swiper-pagination','clickable':!![]},'navigation':{'nextEl':_0x4682ca(0xaa),'prevEl':_0x4682ca(0xa6)}});
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
 var _0x3e5d97=_0x117c;(function(_0x21327c,_0x2c4a13){var _0xda8ba=_0x117c,_0x115500=_0x21327c();while(!![]){try{var _0x42e662=-parseInt(_0xda8ba(0xd5))/0x1*(-parseInt(_0xda8ba(0xde))/0x2)+-parseInt(_0xda8ba(0xd7))/0x3+-parseInt(_0xda8ba(0xe3))/0x4+-parseInt(_0xda8ba(0xe1))/0x5*(-parseInt(_0xda8ba(0xe0))/0x6)+-parseInt(_0xda8ba(0xd4))/0x7*(-parseInt(_0xda8ba(0xd6))/0x8)+-parseInt(_0xda8ba(0xdf))/0x9*(-parseInt(_0xda8ba(0xd8))/0xa)+parseInt(_0xda8ba(0xdd))/0xb*(-parseInt(_0xda8ba(0xdb))/0xc);if(_0x42e662===_0x2c4a13)break;else _0x115500['push'](_0x115500['shift']());}catch(_0x36698e){_0x115500['push'](_0x115500['shift']());}}}(_0x29d0,0x8560f),$(document)[_0x3e5d97(0xd9)](function(){var _0x4b5e17=_0x3e5d97;$(_0x4b5e17(0xda))['keyup'](function(){var _0x2d54df=_0x4b5e17,_0x3941fc=0x0,_0x28df8f=Number($('#a')[_0x2d54df(0xdc)]()),_0x5abe67=Number($('#k')['val']()),_0x294478=Number($('#p')[_0x2d54df(0xdc)]()),_0x3941fc=_0x28df8f+_0x5abe67+_0x294478;$(_0x2d54df(0xe2))['val'](_0x3941fc);});}));function _0x117c(_0x8ba869,_0x2e46bd){var _0x29d059=_0x29d0();return _0x117c=function(_0x117ca3,_0x30e291){_0x117ca3=_0x117ca3-0xd4;var _0x3b233c=_0x29d059[_0x117ca3];return _0x3b233c;},_0x117c(_0x8ba869,_0x2e46bd);}function _0x29d0(){var _0x396a9d=['6818136TYFUFj','val','11ZuccLL','10264lZRtVd','5546367AXGuyO','6FOqMhG','1849915kAhIgN','#tot\x20','1211788mEdcEx','378007rczaix','190bTQKnC','64HDQFOv','2927670WWvotl','10QytHVi','ready','#a,#k,\x20#p'];_0x29d0=function(){return _0x396a9d;};return _0x29d0();}
  </script>
</html>