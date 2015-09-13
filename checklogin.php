<?php
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $con=mysqli_connect('localhost','root','','erail');
    if(!$con){ 
                die("not connected!");
             }
    
    $result3 = mysqli_query($con,"select * from loggedin");
    $row2=mysqli_fetch_array($result3);
    if(!$row2)
    {
        if(($uname!="")||($pass!=""))
        {
        if(($uname=="admin")&&($pass=="admin"))
        {
            echo "<script>window.location.assign('admin.php')</script>";
            $result1= mysqli_query($con,"insert into loggedin values('$uname',1)");
        }
        else
        {
            $result2= mysqli_query($con,"select * from users where uid='$uname' AND password='$pass'");
            $row=mysqli_fetch_array($result2);
            if(!$row)
            {
                echo "<script>alert('Wrong Username or Password');window.location.assign('login.php')</script>";
            }
            else
            {    $result2= mysqli_query($con,"insert into loggedin values('$uname',1)");
                echo "<script>window.location.assign('user.php')</script>";}
        }
        }
        else
        {
            echo "<script>alert('Username or Password must not be empty');window.location.assign('login.php')</script>";
        }
    }
    else
    {echo "<script>alert('Please logout first.');window.location.assign('logout.html')</script>";}
?>