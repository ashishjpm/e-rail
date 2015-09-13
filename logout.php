<?php
    $con=mysqli_connect('localhost','root','','erail');
    if(!$con) { 
        die("not connected!");
    }
    $result1 = mysqli_query($con,"delete from loggedin");
    if($result1)
        {
            echo "<script>alert('Successfully LOGOUT.');window.location.assign('index.html');</script>";
        }
    else{echo "<script>alert('LOGOUT Error')</script>";}
?>