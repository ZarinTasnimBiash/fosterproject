<?php
session_start();
 require_once('DBconnect.php');
if (isset($_POST['update'])){

    
    $na = $_POST['name'];
    $i = $_POST['id'];
    $g = $_POST['gen'];
    $a = $_POST['age'];
    $fa = $_POST['area'];
    $f=$_SESSION['manager'];

    if(mysqli_query($conn, "INSERT INTO children (ID, foster_ID, child_age, child_gender, child_name, foster_area) VALUES ('$i','$f','$a','$g','$na','$fa')")) {
             echo "<script type='text/javascript'>alert('Child has been added');
              window.location='fosterhome.php';</script>";
             exit();
            } else {
               echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);
    
    
 
}

?>