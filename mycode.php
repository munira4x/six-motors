
<?php
//set connection variables
 $db_host = 'localhost';
 $db_user = 'root';
 $db_password = 'root';
 $db_db = 'motors_db';

 //connection to server & database
 $con = mysqli_connect($db_host, $db_user, $db_password, $db_db );

 //check connection
 if(mysqli_connect_errno()):
   printf("Connect failed", mysqli_connect_errno());
   exit();
 endif;

$r1 = $_POST['motor1'];
$r2 = $_POST['motor2'];
$r3 = $_POST['motor3'];
$r4 = $_POST['motor4'];
$r5 = $_POST['motor5'];
$r6 = $_POST['motor6'];


if(isset($_POST['save'])){
    $save = $_POST['save'];

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($con, $my_query);

    $my_query = "INSERT INTO motors (motor1,motor2,motor3,motor4,motor5,motor6) VALUES ($r1, $r2, $r3, $r4, $r5, $r6)";
    $result = mysqli_query($con, $my_query);
  if($result){
        echo "DONE";
    }
    else{
        echo "ERROR";
    }
  }
?>
