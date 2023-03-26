<?php
    $id= $_GET['id'];
   $hostname = "localhost";
     $username = "root";
     $password = "";
     $databaseName = "user_db";
     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
     $query = "select * from afirstpage where id='$id' ";
     $data = mysqli_query($connect,$query);
     $total = mysqli_num_rows($data);
     $result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update design</title>
</head>
<style>
h3{
  text-align: center;
  font-size: x-large;
  text-decoration: underline;
}

.MainPage{
  background-color:grey;
  height:70x;
  width: 100%;
}

label{
  width:120px;
  height: 20px;
  display: inline-block;
  border-radius: 40px;
  margin-left:10px;
  font-size: 20px;
  font-weight: bold;
}

input{
  width: 269px;
  height: 30px;
  border: black 2px;
}

.Firstpage{
  text-align: center;
  font-size:large;
  letter-spacing: 0.5px;
  padding-bottom: 50%;
}

.btn{  
    color:black;
    justify-content: center;
    outline:5px black;
    border: 3px solid black;
    cursor: pointer;
    height: 50px;
    font-weight: bold;
    outline: black; 
}

btn:hover{
    background-color: grey;
    color: white;
}

</style>
<body>
      <div class=MainPage>
      <br><br><br><br><br><br>
      <h3 ><b>UPDATE-DETAILS </b></h3>
      <br>
      <hr>
      <br>
      <div class=Firstpage>
      <form method="POST">
        <label for="location" >LOCATION</label>
        <input type="text"  value="<?php echo $result['location'];?>"id="location" name="location"required  size=23>
        <br><br><br>
        <label for="slot_id" >SLOT ID</label>
        <input type="text"  value="<?php echo $result['slot_id'];?>"id="slot_id" name="slot_id"required size=23>
        <br><br><br>
        <label for="shot_id">SHOT ID</label>
        <input type="text"  value="<?php echo $result['shot_id'];?>" id="shot_id" name="shot_id"required size=23>
        <br><br> <br>
        <label for="time">TIME</label>
        <input type="text"   value="<?php echo $result['time'];?>"id="time" name="time"required  size=23>
        <br><br> <br><br>
        <div class="input_feild">
        <input type="submit"  name="update"  class ="btn" value="UPDATE SLOT">
        </div>
        <br><br>
        </form>
     </div>
     </div>

     <?php
         if(isset($_POST['update'])){
         $hostname = "localhost";
         $username = "root";
         $password = "";
         $databaseName = "user_db";
         $connect = mysqli_connect($hostname, $username, $password, $databaseName);
         $location = $_POST['location'];
         $slot_id= $_POST['slot_id'];
         $shot_id= $_POST['shot_id'];
         $time= $_POST['time'];
         $query = "update afirstpage set location='$location',slot_id='$slot_id',shot_id='$shot_id',time='$time' where id='$id'";
         $result = mysqli_query($connect,$query);

        if ($result){
           echo"<script> alert('Record Updated')</script>";
          ?>
         <meta http-equiv = "refresh" content = "0; url = http://localhost/admin_side/Thirdpage.php" />
          <?php
         }
         else{
          echo"<script> alert('Failed To Delete')</script>";
         }
      }
     ?>
     </body>