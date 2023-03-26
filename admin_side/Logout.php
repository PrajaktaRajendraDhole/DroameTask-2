<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout page</title>
</head>
<style>  
h1,h2{
  text-align: center;
}
#container 
{
    text-align: center;
    font-size:80px;
    padding: 30px;
    border-radius: 10px;
    margin: 20px;
}

.btn
{
    border: round;
    font-family: "Roboto",sans-serif;
    font-style: italic;
    font-weight: bold;
    background-color:darksalmon;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
}

.btn:hover, .btn:focus, .btn:active
{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
</style>

<body>
<?php include 'Navbar.php' ?>
    <div class="container">
       <h1> <b>Thank you for using Aerial Videography Services</b></h1>
       <div id="container">
         <img src="https://images.unsplash.com/photo-1526614180703-827d23e7c8f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1635&q=80" width="1000px", height="500px">
         <button name="logout" class="btn" type="submit" value="logout"  ><a href ="http://localhost/admin_side/login_form.php">Logout</button>       
       </div>
        <br> 
    </div>
</body>