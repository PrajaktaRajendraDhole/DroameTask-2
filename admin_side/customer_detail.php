<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>customer_details</title> 
</head>

<style>
  .mainpage{
    background-color:grey;
    padding: 0 0;
    padding-bottom: 20%;
  }
  
  label{
    width:120px;
    height: 20px;
    display: inline-block;
    border-radius: 40px;
    margin-left:10px;
    font-size: 20px;
  }


input{
 width: 269px;
 height: 30px;
 border: black 2px;
 font-size: x-large;
  }

#Firstpage{
  text-align: center;
  font-size:medium;
  letter-spacing: 0.5px;
}

.btn{  
  color:black;
  justify-content: center;
  outline:5px black;
  border: 3px solid black;
  border-radius:50px;
  height: 50px;
  width: 80px;
  font-weight: bold;
  outline: black;
  font-size: 50px;
 }

</style>
<body >
  <div class ="mainpage">
    <?php include 'Navbar.php'?>
    <br>
      <h2 style="text-align:center;text-decoration:underline;"><b>Aerial Videography Services<b></h2>
      <br>
      <hr>
      <h3 style="text-align:center;text-decoration:underline;"> <b> Add New Customer </b></h3>
      <br><br>
      <div id="Firstpage">
      <form method="POST">
  <div class ="form">
      <label for="ID" >ID</label>
      <input type="text" id="ID" name="ID"required size=4>
      <br><br>
      <label for="NAME" >NAME</label>
      <input type="text" id="NAME" name="NAME"required size=23>
      <br><br> 
      <label for="E-MAIL">E-MAIL</label>
      <input type="text"  id="email" name="email" required size=23>
      <br><br>
      <label for="MOBILE NUMBER">MOBILE NUMBER</label>
      <input type="text"  id="MOBILE_NUMBER" name="MOBILE_NUMBER"required  size=23 maxlength="12" >
      <br><br><br>
      <div class="input_feild">
      <input type="submit"  name="insert"  class ="btn" value="ADD ">
      </div>
      <br><br>
  </div>
      </form>
      </div>
  </div>
     <?php
      if(isset($_POST['insert'])){
         $hostname = "localhost";
         $username = "root";
         $password = "";
         $databaseName = "user_db";
         $ID = $_POST['ID'];
         $NAME= $_POST['NAME'];
         $email= $_POST['email'];
         $MOBILE_NUMBER= $_POST['MOBILE_NUMBER'];
         $connect = mysqli_connect($hostname, $username, $password, $databaseName);
         if ($ID !="" && $NAME !="" && $email !="" &&$MOBILE_NUMBER !=""){
          $query = "INSERT INTO customerdetail ( ID, NAME, email, MOBILE_NUMBER) VALUES ('   $ID','$NAME',' $email','$MOBILE_NUMBER')";
          $result = mysqli_query($connect,$query);
          if ($result){
           echo"data enter succesfully";
         }
         else{
          echo"failed";
        }

      }
      else{
        echo"<script>alert(' please fill the details');</script>";
      }
        
    }
     ?>
     </body>
</html>