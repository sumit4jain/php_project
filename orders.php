<?php
    require 'config.php';

    if(isset($_POST['submit'])){
        $first_name = $_POST["first-name"];
        $last_name = $_POST["last-name"];
        $code = $_POST["code"];
        $gender = $_POST["gender"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city= $_POST["city"];
        $postal= $_POST["postal-code"];

        $duplicate = mysqli_query($conn,"SELECT * from staff where email = '$email' ");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script>	alert('Profile Already Made'); </script>";
            echo"<h1>Profile Already Made</h1>";
        }
        else{   
            $query = "INSERT into staff values('' , '$first_name' , '$last_name' , '$email' , '$code' , '$address' , '$city' , '$postal' , '$gender','$contact')";
            mysqli_query($conn, $query);
        }
        
    }
    else{
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="orders.css">
</head>
<body>
<nav>
    <div class="logo">
        <h3>Ghost Kitchen</h3>
    </div>
    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
        <li><a href="http://127.0.0.1:5501/about.html">About</a></li>
        <li><a href="orders.php">Staff</a></li>
        <li><a href="orderRec.php">Order</a></li>
        <li><a href="orderget.php">Order Info</a></li>
        <li><a href="staffget.php">Staff Info</a></li>
        <li><button class="login-button" onclick="javascript:location.href='logout.php'">Logout</button></li>
    </ul>
</nav>
    <div>
    <form action="" method="post">
  <fieldset>
    <legend>Staff's Personal Information</legend>

    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" required value="">

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" required value="">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="">

    <label >Staff Code:</label>
    <input type="text" id="code" name="code" required value="">

    <label >Contact:</label>
    <input type="number" id="contact" name="contact" required value="">

    <label >Gender:</label>
    <select name="gender" required id="gender" class="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">Others</option>
    </select>

  </fieldset>

  <fieldset>
    <legend>Address Details</legend>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required value="">

    <label for="city">City:</label>
    <input type="text" id="city" name="city">

    <label for="postal-code">Postal Code:</label>
    <input type="text" id="postal-code" name="postal-code" required value="">

  </fieldset>

  <input type="submit" value="Submit" class="btn" name="submit">
</form>

    </div>
</body>
</html>