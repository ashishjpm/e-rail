<?php
    $addtname=$_POST['addtname'];
    $addtno=$_POST['addtno'];
    $addsrc=$_POST['addsrc'];
    $adddest=$_POST['adddest'];
    $addasl=$_POST['addasl'];
    $addaac=$_POST['addaac'];
    $addagn=$_POST['addagn'];
    $addpsl=$_POST['addpsl'];
    $addpac=$_POST['addpac'];
    $addpgn=$_POST['addpgn'];

    $con=mysqli_connect('localhost','root','','erail');
    if(!$con){ 
                die("not connected!");
             }
    if(mysqli_query($con,"insert into train values ('$addtname',$addtno,'$addsrc','$adddest',$addasl,$addaac,$addagn,$addpsl,$addpac,$addpgn)"))
    {
        echo "<script>alert('Train successfully added');window.location.assign('addtrain.html');</script>";
        mysqli_query($con,"insert into train2 values ($addtno,'asl',$addpsl)");
        mysqli_query($con,"insert into train2 values ($addtno,'aac',$addpac)");
        mysqli_query($con,"insert into train2 values ($addtno,'agn',$addpgn)");
    }
    else
    {echo "<script>alert('Error in train adding');window.location.assign('addtrain.html')</script>";}
?>