<?php

require_once('DBconnect.php');

if (isset($_POST['submit'])) {
    $i = $_POST['fid'];
    $n = $_POST['nfos'];
    $r = $_POST['rid'];
    $pd = $_POST['pid'];
    $eid = $_POST['eid'];
	$u = $_POST['fu'];
    $p = $_POST['pass'];
    
    if(mysqli_query($conn, "INSERT INTO foster (ID, foster_name, registration_ID, phone, email, foster_username, password) VALUES('".$i."','".$n."','".$r."','".$pd."','".$eid."','".$u."','".$p."')")) {
             echo "<script type='text/javascript'>alert('Foster home has been added');
              window.location='FosterInfo.php';</script>";
             exit();
            } else {
               echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);
}

?>