<!DOCTYPE html>
<html>
    <head>
        <style>
            body{background-color: #DADADA}
            .divhead{ background-color: black; height: 100px; width: 1350px}
            .divhead1{ margin-left: 30px; margin-top: 27px; float: left; font-size: 40px;font color:red;}
            .regform{ margin-top: 80px; margin-left: 550px;}
            #login{ width: 23em;  height: 2.5em;}
        </style>
    </head>
    <body>
        <div class="divhead"><div class="divhead1"><font color="white">E - RAIL</font></div>
            <div class="divhead1" style="margin-left:770px"></div>
            <div class="divhead1"><font color="white">LOGIN - PAGE</font></div>
        </div>
        <div class="regform">
            <form action="checklogin.php" name="form2" method="post">
                <input type="text" name="uname" placeholder="User Name" style="font-size:28px; height:35px"><br><br>
                <input type="password" name="pass" placeholder="Password" style="font-size:28px; height:35px"><br><br>
                <input type="submit" id="login" value="LOGIN" >
            </form>
        </div>
    </body>
</html>