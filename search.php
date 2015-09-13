<!DOCTYPE html>
<html>
    <head>
        <style>
            body{background-color: #DADADA}
            .divhead{ background-color: black; height: 100px; width: 1350px}
            .divhead1{ margin-left: 30px; margin-top: 27px; float: left; font-size: 40px;font color:red;}
            .divhead2{ margin-left: 30px; margin-top: 10px; font-size: 40px;font color:red; border:5px solid gray; padding:10px;
                border-style: solid; border-color: black;border-radius:2px}
            .btn{ width: 11.5em;  height: 2.5em;}
            .sel{height: 35px;width: 310px;font-size: 28px}
        </style>
    </head>
    <body>
        <div class="divhead"><div class="divhead1"><font color="white">E - RAIL</font></div>
            <div class="divhead1" style="margin-left:680px"></div>
            <div class="divhead1"><font color="white">SEARCH TRAIN - PAGE</font></div>
        </div>
    </body>
</html>
<?php
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $con=mysqli_connect('localhost','root','','erail');
    if(!$con){ 
                die("not connected!");
             }
    $result=mysqli_query($con,"select tname, tno from train where src='$src' AND dest='$dest'");
    if($result)
    {
        $atrains=mysqli_fetch_array($result);
        echo "<center>";
        echo "<font>";
        echo "</br>";
        echo "Train No. : ";
        echo $atrains[tno];
        echo "</br>";
        echo "Train Name : ";
        echo $atrains['tname'];
        echo "</font>";
        echo "</center>";
    }
?>