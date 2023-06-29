<?php
 if(isset($_POST['name']))
{ $server = "localhost";

    $username = "root";

    $password = "";

    $con = mysqli_connect($server, $username, $password);

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `trip`(`name`, `age`, `gender`, `email`, `phone`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp());";

     // Execute the query
     if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel by Abhishek</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <img src="bg.png" alt="bg not" class="bg">
    <div class="container">
        
        <h1 style="font-family: 'Dancing Script', cursive; font-size: 50px;" > Travel @ Abhishek </h1>
        <br>
        
        <p class="s1">
            First step to everlasting memories. 
        </p>
    
    </div>
    <br>
    <br>
    <div class="con2">
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Type your Name">
            <input type="text" name="age" id="name" placeholder="Type your Age">
            <input type="text" name="gender" id="name" placeholder="Type your Gender">
            <input type="email" name="email" id="name" placeholder="Type your email">
            <input type="number" name="Phone" id="name" placeholder="Type your Phone">
            <button class="btn">Sumbit</button>       
        </form>

    </div>
    <!--INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `date`)
     VALUES (NULL, 'Abhishek Gupta', '25', 'Male', 'this@this.com', '999999999', current_timestamp());-->
    <script src="index.js"></script>
</body>
</html>