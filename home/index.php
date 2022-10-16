<?php
    $inserted = false;
    if(isset($_POST['name'])){
    $inserted = true;
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to database failed". mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $category = $_POST['category'];

    $sql = "INSERT INTO `badminton`.`registration` (`srno`, `age`, `gender`, `email`, `number`, `category`, `event`, `name`) VALUES (NULL, '$age', '$gender', '$email', '$phone', '$category', '$event', '$name');";

    if($con->query($sql) == true){
        
    }else{
        echo "Error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
        <div class="container">
            <h1>Weightlifting Registration form</h1>
            <h3>Enter the details Submit form to confirm participation</h3><br><br>
            <?php
                if($inserted){
                    echo "<h1 class='submitmsg'>Thank you for submiting the form</h1>";
                }
            ?>
            
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your age">
                <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <input type="phone" name="phone" id="phone" placeholder="Enter your number">
                <input type="text" name="category" id="category" placeholder="Enter your weight category">
                <input type="text" name="event" id="event" placeholder="Enter your Event"><br>
                <button class="btn">Submit</button>
                <button class="btn">Reset</button>
            </form>
        </div>
    <script src="index.js"></script>
</body>
</html>