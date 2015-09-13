<?php
    $uid=$_POST['uid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pno=$_POST['pno'];
    $con=mysqli_connect('localhost','root','','erail');
if($uid==""){echo "<script>alert('Username must not be empty.');window.location.assign('index.html')</script>";}
elseif($fname==""){echo "<script>alert('First name must not be empty.');window.location.assign('index.html')</script>";}
elseif($lname==""){echo "<script>alert('Lname name must not be empty.');window.location.assign('index.html')</script>";}
elseif($email==""){echo "<script>alert('E mail must not be empty.');window.location.assign('index.html')</script>";}
elseif($password==""){echo "<script>alert('Password must not be empty.');window.location.assign('index.html')</script>";}
elseif($pno==""){echo "<script>alert('Phone no. must not be empty.');window.location.assign('index.html')</script>";}
else{
    if(!$con){ 
                die("not connected!");
             }
    $result3 = mysqli_query($con,"select * from loggedin");
    $row2=mysqli_fetch_array($result3);
    if(!$row2)
    {
        $result1 = mysqli_query($con,"insert into users values ('$uid','$fname','$lname','$email','$password','$pno')");
        if($result1)
        {
            echo "<script>alert('You are successfully registered.');window.location.assign('user.php');</script>";
            $reslt2 = mysqli_query($con,"insert into loggedin values ('$uid',1)");   
        }
        else{echo "<script>alert('Registration not successfull please try again.')</script>";}
    }
    else
    {echo "<script>alert('Please logout first.');window.location.assign('index.html')</script>";}
}
?>