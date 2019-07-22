<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

  <div class="login_box">
  <div class="container">
  	<div class="row">
  	<div class="col-md-6 login-left">

  		<h2> Login Here </h2>
        <form action="validation.php" method="post">
        	<div class="form-group">
        	   <label>Username</label>
               <input type="text" name="User" class="form-control" required>
            </div>

            <div class="form-group">
        	   <label>Password</label>
               <input type="password" name="Password" class="form-control" required>
            </div>
            <label class="radio-inline"><input type="radio" name="type" value="normal" checked>User</label>
            <label class="radio-inline"><input type="radio" name="type" value="admin">Admin</label><br>
            <button type="submit" class="btn btn-primary"> Login </button>

        </form>

  	</div>	

  	  	<div class="col-md-6 register-right">

  		<h2> Register Here </h2>
        <form action="registration.php" method="post">
        	<div class="form-group">
        	   <label>Name</label>
               <input type="text" name="Name" class="form-control" required>
            </div>

            <div class="form-group">
        	   <label>Email</label>
               <input type="text" name="Email" class="form-control" required>
            </div>

        	<div class="form-group">
        	   <label>Username</label>
               <input type="text" name="User" class="form-control" required>
            </div>

            <div class="form-group">
        	   <label>Password</label>
               <input type="password" name="Password" class="form-control" required>
            </div>
            <label class="radio-inline"><input type="radio" name="type" value="normal" checked>User</label>
            <label class="radio-inline"><input type="radio" name="type" value="admin">Admin</label><br>
            <button type="submit" class="btn btn-primary"> Register </button>

        </form>

  	</div>

  	</div>
  </div>

  </div>

</body>
</html>