<?php
    $deltno=$_POST['deltno'];
    $con=mysqli_connect('localhost','root','','erail');
    if(!$con){ 
                die("not connected!");
             }
    $result1 = mysqli_query($con,"delete from train where tno=$deltno");
    if($result1)
        {
            echo "<script>alert('Successfully deleted.');window.location.assign('admin.php');</script>";
        }
    else{   echo "<script>alert('Error in deleting train');window.location.assign('deltrain.html');</script>";}
?>