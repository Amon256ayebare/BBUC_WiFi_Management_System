
<?php require 'db.php';
if($_POST){
 $db->prepare("INSERT INTO admins VALUES(NULL,?,?,?)")
 ->execute([$_POST['name'],$_POST['email'],password_hash($_POST['password'],PASSWORD_DEFAULT)]);
 header("Location: login.php");
} ?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="container mt-5">
<h3>BBUC WiFi Admin Registration</h3>
<form method="post">
<input class="form-control mb-2" name="name" placeholder="Name">
<input class="form-control mb-2" name="email" type="email" placeholder="Email">
<input class="form-control mb-2" name="password" type="password" placeholder="Password">
<button class="btn btn-primary">Register</button>
</form></body></html>
