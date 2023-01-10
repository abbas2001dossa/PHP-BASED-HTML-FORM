<?php
$insert = false ;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con)
    {
        die(" cnnection error" . mysqli_connect_errro());

    }

    //echo " SUCCESSFUL CONNECTION TO THE DB ";

    $name=$_POST['name'] ;
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];

    
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;



    if($con->query($sql) == true){
        // echo "Successfully inserted";}
      
    
    $con->close();
}





// $insert = false;
// if(isset($_POST['name'])){
//     // Set connection variables
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//     // Create a database connection
//     $con = mysqli_connect($server, $username, $password);

//     // Check for connection success
//     if(!$con){
//         die("connection to this database failed due to" . mysqli_connect_error());
//     }
//     // echo "Success connecting to the db";

//     // Collect post variables
//     $name = $_POST['name'];
//     $gender = $_POST['gender'];
//     $age = $_POST['age'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $desc = $_POST['desc'];
//     $sql = "INSERT INTO 'trip'.'trip' ('name', 'age', 'gender', 'email', 'phone', 'other', 'date') VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//     if($con->query($sql) == true){
//                 echo "Successfully inserted";}
//             else{
//                 echo " ERROR " ;
//             }  
            
//             $con->close();
// }













?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to the FORM</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class ="fast" src="fast.jpg" alt="FASTNCUES">
    <div class="container">
        <h3> Welcome to the travel form for batch 22</h3>
        <P> Enter your details to confirm our participation in the form </P>
        

        
    
        <form action="one.php" method="post"> 
            <input type="text" name="name" id="name" placeholder=" Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age ">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender  ">
            <input type="text" name="email" id="email" placeholder="Enter your email ">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone ">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Any other information here"></textarea>
            <button class="btn">Submit</button>
            </form>
    
    
    
    </div>
    <script src="one.js"></script>
    
    
</body>
</html>


