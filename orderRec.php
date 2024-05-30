<?php
    require 'config.php';

    if(isset($_POST['submit'])){
        $first_name = $_POST["first-name"];
        $last_name = $_POST["last-name"];
       
        $contact = $_POST["contact"];
       
        $food = $_POST["food"];
        $bill= $_POST["bill"];

        
          
            $query = "INSERT into `order`(first_name,last_name,contact,food,bill,id) values('$first_name' , '$last_name' ,  '$contact' , '$food' , '$bill','')";
            mysqli_query($conn, $query);
        
        
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
<style>
    nav{
    height: 4.5rem;
    width: 100vw;
    background-color: orange;
    color: white;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    
    z-index: 10;
}

/*Styling logo*/
.logo{
    padding:1vh 1vw;
    text-align: center;
}
.logo img {
    height: 5rem;
    width: 5rem;
}

/*Styling Links*/
.nav-links{
    display: flex;
    list-style: none; 
    width: 88vw;
    padding: 0.7vw;
    justify-content: space-evenly;
    align-items: center;
    text-transform: uppercase;
    margin-left: 15rem;

}
.nav-links li a{
    text-decoration: none;
    margin: 0.7vw;
    color: white;
}
/* .nav-links li a:hover {
    color: #61DAFB;
} */
.nav-links li {
    position: relative;
}
.nav-links li a:hover::before{
    width: 80%;
    color: #05080a;
}

.login-button{
    background-color: transparent;
    border: 1.5px solid #f2f5f7;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    margin-left: 1rem;
    font-size: 1rem;
    cursor: pointer;
    color: white;
    

}
.login-button:hover {
    color: #01030e;
    background-color: rgb(243, 166, 23);
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
}
.join-button{
    color: #0d0d0d;
    background-color: #61DAFB;
    border: 1.5px solid #61DAFB;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    font-size: 1rem;
    cursor: pointer;
    /* margin-left: 150px; */
}
.join-button:hover {
    color: #f2f5f7;
    background-color: transparent;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
}

/*Styling Hamburger Icon*/
.hamburger div{
    width: 30px;
    height:3px;
    background: #f2f5f7;
    margin: 5px;
    transition: all 0.3s ease;
}
.hamburger{
    display: none;
}
.btn{
    background-color: orange;
}
</style>
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
    <legend>Customer Information</legend>

    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" required value="">

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" required value="">

    <label >Contact:</label>
    <input type="number" id="contact" name="contact" required value="">

  </fieldset>

  <fieldset>
    <legend>Food Details</legend>

    <label for="address">Food:</label>
    <input type="text" id="food" name="food" required value="">

    <label for="postal-code">Bill:</label>
    <input type="number" id="bill" name="bill" required value="">

  </fieldset>

  <input type="submit" value="Submit" class="btn" name="submit">
</form>

    </div>
</body>
</html>