<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "user_db";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$id= $_GET['id'];
$query ="delete from afirstpage where id='$id' ";
$data=mysqli_query($connect,$query);
if($data){
    echo"<script> alert('Record Deleted')</script>";
?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/admin_side/Thirdpage.php" />
<?php
}
else{
echo'Failed to delete';
}
?>