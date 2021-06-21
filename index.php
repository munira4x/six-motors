<?php
//set connection variables
 $db_host = 'localhost';
 $db_user = 'root';
 $db_password = '';
 $db_db = 'motors_database';
 $db_port = 80;

 //connection to server & database
 $con = mysqli_connect($db_host, $db_user, $db_password, $db_db );

 //check connection
 if(mysqli_connect_errno()):
   printf("Connect failed", mysqli_connect_errno());
   exit();
 endif;

$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];
$r4 = $_POST['r4'];
$r5 = $_POST['r5'];
$r6 = $_POST['r6'];

$save= $_POST["save"]

if(isset($_POST['save']}){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($con, $my_query);

    $my_query = "INSERT INTO test (r1, r2, r3, r4, r5, r6) VALUES ('$r1', '$r2', '$r3', '$r4', '$r5', $r6)";
    $result = mysqli_query($con, $my_query);
    if($result)
    {
        echo "DONE";
    }
    else{
        echo "ERROR <br>";
    }
  }else if(isset($_POST['on'])) {
      echo "<br>";

      $my_query = "";

      $my_query = "select * from on_values WHERE 1 ";
      $result = mysqli_query($con, $my_query);

      $my_query = "INSERT INTO on_values (isOn) VALUES (1)";
      $result = mysqli_query($con, $my_query);
      if($result)
      {
          echo "DONE";
      }
      else{
          echo "ERROR <br>";
      }

  }else if(isset($_POST['off'])) {
      echo "<br>";

      $my_query = "";

      $my_query = "select * from off_values WHERE 1 ";
      $result = mysqli_query($con, $my_query);

      $my_query = "INSERT INTO off_values (isOff) VALUES (0)";
      $result = mysqli_query($con, $my_query);
      if($result)
      {
          echo "DONE!";
      }
      else{
          echo "ERROR  <br>";
      }
  }



?>
