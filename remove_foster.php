<?php
include "DBconnect.php";
$id = $_GET['id']; //grabbing the id from FosterInfo.php 
$query = "DELETE FROM foster where ID='$id'";
$data = mysqli_query($conn, $query);
if($data){
    echo"<script>('Record Deleted')</script>"; 
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=FosterInfo.php"> <!--eki page e thakbe refresh hoye delete howar por-->

<?php
}
else{
    echo"<font color='red'>Sorry, delete process failed";
}
?>
