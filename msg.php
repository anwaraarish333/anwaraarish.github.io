<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
  $db = mysqli_connect($server,$username,$password,$dbname);

    if(isset($_POST["send"])){
      sendMessage($db,$_POST["uname"],$_POST["email"],$_POST["subject"],$_POST["message"]);
    }


  function sendMessage($con,$uname,$email,$subject,$message){
    $insert = mysqli_query($con,"insert into messages(uname,email,subject,message) values('".$uname."','".$email."','".$subject."','".$message."')");
    if($insert){
      echo '<script>window.location.replace("http://localhost/personal");</script>';
    }
    else{
      echo "error";
    }
  }
?>
