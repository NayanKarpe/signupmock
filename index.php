<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up Mock</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="text/css" href="favicon.ico">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="runn.js" type="text/javascript"></script>


</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">
<br>
<h2>Hello Buddy!!</h2>
</div>
<p>A good day for a quick sign up test, isn't it?</p>
<br>
<p id="show_message" style="display: none">Thank you for your time, your account has been created!</p>
<p id="show" style="display: none">Email already exists</p>


<span id="error" style="display: none"></span>
<form action="javascript:void(0)" method="post" id="ajax-form">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" id="name" class="form-control" value="" maxlength="50" >
</div>
<div class="form-group ">
<label>Email</label>
<input type="email" name="email" id="email" class="form-control" value="" maxlength="30" >
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="mobile" id="mobile" class="form-control" value="" maxlength="12" >
</div>
<input type="submit" class="btn btn-primary" name="submit" value="SIGN UP">

<br>
<br>
<p>Already Signed Up?</p>
</form>


 <form method="POST" action="login.php">
       <input type="submit" class="btn btn-primary" name="submit" value="LOGIN">
 </form>

</div>
</div>
</div>
</body>
</html>
