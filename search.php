<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background: #fff;
        }
        table{
            border-collapse: collapse;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16px;
            border-radius: 5px;
            padding: 5px 12px;
            display: inline-block;
            margin: 25px;
            text-align: center;
        }
        .container{
            text-align:center;
        }
        .btn{
            padding: 5px 12px;
            margin:25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16px;
        }
        img{
            width: 120px;
            height: 300px;
        }
    </style>
    
    <div class="container">  
    <h1>Search</h1> 
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="field">
    <label for="name">Firstname:
        <input type="text" class="form-control" id="ftxt" />
    </label>
    <label for="last">Lastname:
        <input type="text" class="form-control" id="ltxt" />
    </label>
    <label for="teln">Tel Number:
        <input type="tel" class="form-control" id="ttxt" />
    </label>
        <div class="center">
            <button name="search">Check Availability</button>
        <!-- <input type="submit" class="btn" name="search" value="Check Availability"> -->
        </div>
        </form>
   <?php
   include "connect.php";
   if(isset($_POST['search']))
   {
    $query = "SELECT * FROM `check_cottage` ";
    $query_run = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
      
       <div class="card">
       <?php echo '<img src="data:image;base64,'.base64_encode($row['IMAGES']).' " style="width: 100px; height: 100px;" alt="image">'?>
       </div>
       <div class="card">
        <?php echo $row['COTTAGE_TYPE']?>
        </div>

        <div class="card">
        <td><?php echo $row['SCHED_TIME']?>
        <div class="card">
        </div>

        <td><?php echo $row['PRICE']?>
        <div class="card">
        </div>
        <td><a href="book.php">Book Now</a>
   
    <?php
    }

   
   } 
   ?>
    </div>
</body>

</html>
