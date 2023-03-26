<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Third Page</title>
  <style>
    .update,.delete
    {margin: 0;
      font-size: large;
      font-family: 'Courier New', Courier, monospace;
      padding:0;
      background-color: green;
      color:white;
      border:0;
      outline:none;
      border-radius: 10px;
      height: 34px;
      width: 90px;
      cursor: pointer;
      justify-content: center;
    }

    .delete{
      background-color:red;
    }

    table{
      background-color: white;
      color: balck;
    }

    table th,td{
      text-align: center;
      border: 3px solid black;
      background-color: white;
      font-size:larger;
     }
  
    table td{
      height: 50px;
    }

    table th{
      height: 40px;
      font-size:22px;
      font-weight:50;
    }

    .thirdpage{
    padding-bottom: 50%;
    background-color: grey; 
    }
</style>
</head>

<body background_color="grey">
<div class="thirdpage">
<?php include 'Navbar.php'?>
    <?php
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $databaseName = "user_db";
     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
     $query = "select * from afirstpage";
     $data = mysqli_query($connect,$query);
     $total = mysqli_num_rows($data);
     $result = mysqli_fetch_assoc($data);
    if($total !=0){
      ?>
     <br><br>
      <h2 align ="center"> <mark>Manage Slot Details </mark></h2>
      <center>
      <br>
      <br>
       <table border="2",cellspacing="15px" , width="100%" >
         <tr>
          <th width="10%"><b>Id<b></th>
         <th width="15%"><b>Location</b></th>
         <th width="15%"><b>slot Id</b></th>
         <th width="20%"><b>Shot Id</b></th>
         <th width="20%"><b>Time</b></th>
         
         <th width="20%">operations</th>
     </tr>
     <?php
     while($result = mysqli_fetch_assoc($data)){
          echo  
          "<tr>
             <td>".$result['id']."</td>
             <td>".$result['location']."</td>
             <td>".$result['slot_id']."</td>
             <td>".$result['shot_id']."</td>
             <td>".$result['time']."</td>
             <td><a href='update_design.php? id=$result[id]'><input type='submit' value='UPDATE' class='update'></a>
             <a href='delete.php? id=$result[id]'><input type='submit' value='DELETE' class='delete' onclick='return check_delete()'></a></td>
           </tr>
            ";     
       }       
    }
   else{
      echo" noo records";
   }
     ?>
      </table> 
  </center>
     </body>
     <script>
  function check_delete(){
      return confirm('Are you sure you want to delete this record');
  }
    </script>
    </div>
     </html>
     