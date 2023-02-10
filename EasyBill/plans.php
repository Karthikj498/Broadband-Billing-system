
<?php
 include "connection1.php";
 error_reporting(0);
 if(isset($_POST['submit']))
 {
    $Amount= $_POST['amount'];
    $Description= $_POST['desc'];
    $Isp_id= $_POST['number'];
    
    if($Amount<0){ 
       echo "<script>alert('Woops!Amount cannot be negative')</script>";
        }
    $insert_query=" insert into plan(Amount,Description,isp_id)
          values('$Amount','$Description','$Isp_id')";
        $res =  mysqli_query($con,$insert_query);
        if($res){
            echo"<script>alert('Plan has been added!')</script>";
            $Amount="";
            $Description= "";
            $Isp_id="";
          
        }
        else{
    
            echo"<script>alert('data not inserted successfully')</script>";
               
        }
    }
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plans.css">
    <title>PLANS</title>
</head>
<body>
<div class="container">
<form action="plans.php" method="POST">
      <h1 class="main_heading">ADD PLANS</h1>
        <p>Amount:*<input type="text" name="amount" id="amount" value="<?php echo  $Amount ?>" required></p>
        <p>Description:* <input type="text" name="desc" id="desc" value="<?php echo $Description; ?>" required></p>
        <p>Admin ID:* <input type="number" name="number" id="number" value="<?php echo $Isp_id; ?>" required></p>
        <input type="submit" name="submit" value="Add this plan" >
    </form>
</div>
</body>
</html>
