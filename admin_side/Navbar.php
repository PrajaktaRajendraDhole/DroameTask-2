<!DOCTYPE html>
<html lang="en">
<head>
  <title>Navbar page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  *,
*:before,
*:after{
  padding: 0;
  margin: 0;
 box-sizing: border-box;
}

a{
  position:relative;
  text-decoration: none;
  font-size: 18px;
  letter-spacing: 0.5px;
  padding: 0 10px; 
}

a:after{
  content: "";
  position: absolute;
  background-color: black;
  height: 3px;
  width: 0;
  left: 0;
  bottom: -10px;
  transition: 0.3s;
}

a:hover{
  color:#ffffff;
  transform: scale(0.9);
}

a:hover:after{
  width: 100%; 
}

.container-fluid{
  text-align:center;
  background-color:bisque;
  font-size:large;
}

.navbar-header{
  font-size:large;
}

</style>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Homepage.php">HOME</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="customer_detail.php"> Add Customer </a></li>
      <li><a href="secondpage.php"> Add Booking</a></li>
      <li><a href="Thirdpage.php">Manage Booked Slots</a></li>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
