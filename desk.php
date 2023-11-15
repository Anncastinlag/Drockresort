<?php
include "connect.php";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<br> ". $row["DATE_RESERVED"]. " ";
    }
} else {
    echo "0 results";
}

$sql = "SELECT DATE_RESERVED FROM new_reservation";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<body>
 <style>
    body{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        text-align: justify;
    }
    .list{
        padding: 25px;
    }
    .result{
        padding-top: 45px;
    }
 </style>
 <div class="list">

 </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<select name ="Agency" id="hey">
   <option value ="0" selected = "selected"> Select Agency..</option>
   <option id ="400" value ="Name 1"> Name1</option>
   <option id ="400" value ="Name 1"> Name2</option>
   <option id ="400" value ="Name 1"> Name3</option>
   <option id ="400" value ="Name 1"> Others</option>
 </select>
<div id="result">
    <p>price</p>
</div>

<script>
    $('#hey').on('change',function(){
    $('#result').html($(this).val());   
});
</script>
</body>
</html>
	