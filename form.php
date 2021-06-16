
<!DOCTYPE html>
<html lang="en">
<head>
    <!--ginsburg-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--connect css -->
    <link rel="stylesheet" href="form.css">
    <!--title-->
    <title>Ginsburg</title>
</head>
<body>






    
<div class="wrapper">
    <div class="main">
        <!--header-->
        <h1>QURENTINE ACCOUNT</h1>
        <!--form-->
        <form action="formin.php"  method="POST">
            <p><input type="text" name="uname" placeholder=" user name" class="input" required></p>
            <p><input type="tel" name="phone" pattern="[0-9]{10}" title="Enter valid phone number" placeholder="Contact Number" class="input" required></p>
            <p><input type="email" name="email" placeholder=" email" class="input" required></p>
            <p><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            placeholder=" password" class="input" required></p>
            <p><input type="password" name="c_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
             placeholder=" confirm password" class="input" required></p>
            

            <div class="q2">Are there any symptoms?</div><br>

            <div class="q1">
                <input type="radio" id="yes" name="yesno" value="yes" required>
                <label for="yes">YES</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="no" name="yesno" value="no" required >
                <label for="no">NO</label>
           
            </div>
            <br>

            <div class="bott">
                <p><input type="submit" name="sub" value="register" class="btn f1"></p>
                <p><input type="reset" name="res" value="reset" class="btn fr"></p>

            </div>
        </form>
    </div>
</div>


</body>
</html>