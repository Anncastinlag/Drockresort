<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<table class="table table-bordered table-striped">
    <thead>
    	<tr class="btn-primary">
	    	<th>S.No.</th>
	    	<th>Name</th>
	    	<th>Phone Number</th>
	    	<th>Email</th>
	    	<th></th>
	    </tr>
    </thead>
    <tbody>
    	<?php 
      include "connect.php";
    		$sql = "SELECT * FROM room";    // Select table here 
    		$result = mysqli_query($conn,$sql);  // here i am run the query
    		$i = 1;                             // only creates sequence of the data
    		while($row = mysqli_fetch_array($result)) // Showing all the data
    		{
    	?>
    	<tr>
	        <td><?php echo $i; ?></td>
	    	<td><?php echo $row['ROOM_TYPE']; ?></td>
	    	<td><?php echo $row['DESCRIPTION']; ?></td>
	    	<td><?php echo $row['PRICE']; ?></td>
        <td><button ></button></td>
	    
    	</tr>
      <div id="myModal<?php echo $row['ID'] ?>" class="modal fade" role="dialog">
			<div class="modal-dialog">
			    <div class="modal-content">
					<div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
						    <h4 class="modal-title">Details</h4>
				    </div>
				    <div class="modal-body">
						 <h3>Name : <?php echo $row['ROOM_TYPE']; ?></h3>
						 <h3>Mobile Number : <?php echo $row['DESCRIPTION']; ?></h3>
						 <h3>Email : <?php echo $row['DESCRIPTION']; ?></h3>
				    </div>
				</div>
			</div>
		</div>

    					
    <?php 
    		$i++;
    		}
    	?>
    </tbody>
</body>
</html>