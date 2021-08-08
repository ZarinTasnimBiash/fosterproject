<?php

require_once('DBconnect.php');

if (isset($_POST['update'])){
    $na = $_POST['name'];
    $i = $_POST['id'];
	$f = $_POST['nid'];
    $g = $_POST['gen'];
	$a = $_POST['age'];
    $o = $_POST['occ'];
    $s = $_POST['sal'];
    $r = $_POST['rel'];
    $u = $_POST['usen'];
    $p = $_POST['pass'];


  
    if(mysqli_query($conn, "INSERT INTO `users`(`ID`, `NID`, `name`, `user_username`, `password`, `age`, `gender`, `occupation`, `salary`, `relationship_status`) VALUES ('$i','$f','$na','$u','$p','$a','$g','$o','$s','$r')")) {
             echo "<script type='text/javascript'>alert('Foster home has been added');
              window.location='userlogin.php';</script>";
             exit();
            } else {
               echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);
}

?>