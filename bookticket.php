<?php
    $tno=$_POST['tno'];
    $class=$_POST['class'];
    $con=mysqli_connect('localhost','root','','erail');
    if(!$con){ 
                die("not connected!");
             }
    $available = mysqli_query($con,"select * from  train where tno = $tno");
    $row = mysqli_fetch_array($available);
    $r1 = mysqli_query($con,"select loginid from loggedin");
    $r2 = mysqli_query($con,"select * from train2 where tno=$tno AND class='$class'"); 
    $uname = mysqli_fetch_array($r1);
    $total = mysqli_fetch_array($r2);
    $uname1=$uname[loginid];
    $total1=$total[price];
    if($row[$class]==0)
    {
        echo "<script>alert('Seats not available');window.location.assign('bookticket.html')</script>";
    }
    else
    {
        $class2=$row[$class]-1;
        if($class=="asl"){
            mysqli_query($con,"insert into o2 values('$uname1',$tno,'$class','notbooked',$total1)");
        $q=mysqli_query($con,"update train set asl=$class2 where tno=$tno");
        echo "<script>alert('Booking in sleeper class Successfull');window.location.assign('user.php')</script>";}
        $class2=$row[$class]-1;
        if($class=="aac"){
            mysqli_query($con,"insert into o2 values('$uname1',$tno,'$class','',$total1)");
        $q=mysqli_query($con,"update train set aac=$class2 where tno=$tno");
        echo "<script>alert('Booking in A.C. class Successfull');window.location.assign('user.php')</script>";}
        $class2=$row[$class]-1;
        if($class=="agn"){
            mysqli_query($con,"insert into o2 values('$uname1',$tno,'$class','',$total1)");
        $q=mysqli_query($con,"update train set agn=$class2 where tno=$tno");
        echo "<script>alert('Booking in General class Successfull');window.location.assign('user.php')</script>";}
    }
?>