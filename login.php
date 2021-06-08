<html>
<head>
<title>logo</title>
<!--boostrap link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<!--css link -->
<link rel="stylesheet" href="sty.css">
</head>
<body>
    <div class="container">
    <div class="login-box">
    
    <div class="row">
    <div class="col-md-6 login-left">
        <!--headline-->
    <h2>LOGIN HERE</h2>
    <!--form-->
<form action="validation.php" method="post">
<div class="form-group">

<label>username</label>
<input type="text" name="user" class="form-controal" required>
</div>

<div class="form-group">

<label>password</label>
<input type="password" name="password" class="form-controal" required>
</div>

<!--login button-->
<button type="submit" class="btn">login</button>
</form>
    </div>
<!--Register-->
    <div class="col-md-6 login-right">
    <h2>REGISTER HERE</h2>
<form action="register.php" method="post">
<div class="form-group">

<label>username</label>
<input type="text" name="user" class="form-controal" required>
</div>

<div class="form-group">

<label>password</label>
<input type="password" name="password" class="form-controal" required>
</div>
<!--register button-->
<button type="submit" class="btn">Register</button>
</form>
    </div>
    </div>
    </div>
</body>
</html>