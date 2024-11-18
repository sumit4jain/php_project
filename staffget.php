<?php

    require 'config.php';
    $query="SELECT * from staff";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  font-family: 'lato', sans-serif;
  margin: 0;
  padding: 0;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: orange;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  .col-5 {
    flex-basis: 10%;
  }
  .col-6 {
    flex-basis: 40%;
  }
  .col-7 {
    flex-basis: 25%;
  }
  .col-8 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: orange;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
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
        <li><a href="about.php">About</a></li>
        <li><a href="orders.php">Staff</a></li>
        <li><a href="orderRec.php">Order</a></li>
        <li><a href="orderget.php">Order Info</a></li>
        <li><a href="staffget.php">Staff Info</a></li>
        <li><button class="login-button" onclick="javascript:location.href='logout.php'">Logout</button></li>
    </ul>
</nav>
<div class="container">
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Id</div>
      <div class="col col-2">Staff Name</div>
      <div class="col col-3">email</div>
      <div class="col col-4">Staff Code</div>
      <div class="col col-5">Gender</div>
      <div class="col col-6">Address</div>
      <div class="col col-7">City</div>
      <div class="col col-8">Postal code</div>
    </li>
    <?php
        while($row=mysqli_fetch_array($result)){
    ?>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id"><?php echo $row['id']; ?></div>
      <div class="col col-2" data-label="Customer Name"><?php echo $row['first'],' ',$row['last'] ?></div>
      <div class="col col-3" data-label="Amount"><?php echo $row['email']; ?></div>
      <div class="col col-4" data-label="Payment Status"><?php echo $row['code']; ?></div>
      <div class="col col-4" data-label="contact"><?php echo $row['contact']; ?></div>
      <div class="col col-4" data-label="gender"><?php echo $row['gender']; ?></div>
      <div class="col col-4" data-label="address"><?php echo $row['address']; ?></div>
      <div class="col col-4" data-label="city"><?php echo $row['city']; ?></div>
      <div class="col col-4" data-label="postal code"><?php echo $row['postal']; ?></div>
    </li>
    <?php } ?>
  </ul>
  <?php } ?>
</div>
</body>
</html>