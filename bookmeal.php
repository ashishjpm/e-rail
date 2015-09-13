<?php
    $tno=$_POST['tno'];
    $food=$_POST['food'];
    $class=$_POST['class'];
    $con=mysqli_connect('localhost','root','','erail');
    if(!$con){ 
                die("not connected!");
             }
    $available = mysqli_query($con,"select * from meal where mtype = '$food'");
    $row = mysqli_fetch_array($available);
    $r1 = mysqli_query($con,"select loginid from loggedin");
    $r2 = mysqli_query($con,"select price from meal where mtype='$food'"); 
    $r3 = mysqli_query($con,"select price from train2 where tno=$tno AND class='$class'"); 
    $uname = mysqli_fetch_array($r1);
    $total = mysqli_fetch_array($r2);
    $total2 = mysqli_fetch_array($r3);
    $uname1=$uname[loginid];
    $total1=$total[price];
    $total=$total2[price];
    if($row)
    {
        if($row[available]>0)
        {
            $anew=$row[available]-1;
            $check = mysqli_query($con,"select * from o2 where uname='$uname1' AND tno=$tno");
            $check2 = mysqli_fetch_array($check);
            if($check2[tno])
            {
                $available2 = mysqli_query($con,"update meal set available=$anew where mtype='$food'");
                $newprice=$total1+$total;
                $mealorder2 = mysqli_query($con,"delete from o2 where uname='$uname1'");
                $mealorder = mysqli_query($con,"insert into o2 values('$uname1',$tno,'$class','$food',$newprice)");
            }
            else{echo "<script>alert('Please book the train ticket first');window.location.assign('user.php')</script>";}
            if($mealorder)
            {echo "<script>alert('Booking of meal is done Successfully');window.location.assign('user.php')</script>";}
            else{echo "<script>alert('error placing order');window.location.assign('user.php')</script>";}
        }
        else{echo "<script>alert('Out of stock please try another meal type');window.location.assign('user.php')</script>";}
        
    }
    else{echo "<script>alert('Booking FAILED');window.location.assign('user.php')</script>";}
    
?>