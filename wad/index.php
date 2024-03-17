<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password= "";
$con =mysqli_connect($server,$username,$password);
if(!$con){
    die("connection falied due to".mysqli_connect_error());
}

$name   = $_POST['name'];
$age    = $_POST['age'];
$gender = $_POST['gender'];

$email  = $_POST['email'];
$desc  = $_POST['desc'];
$sql= "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Gender`,  `Email`, `desc`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$desc', current_timestamp())";
echo $sql;
if($con->   query($sql)==TRUE){
    echo  "Sucess";}
    else{   
        echo "error $sql <br>  $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bvrit" src="freshman.jpeg" alt="BVRIT"> 
    <div class="container">    
        <h1>Welcome to BVRIT Manali Trip Travel Form</h1>
        <p>Enter your detalis and submit to confirm you participation in  the trip</p>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
        <button class="btn">Submit</button> 
        <br>
        <button class="btn">Reset</button>
    </form> 
    </div>
    <script src="index.js">

    </script>
   
</body>
</html>
