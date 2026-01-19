
<?php session_start(); require 'db.php';
if($_POST){
 $s=$db->prepare("SELECT * FROM admins WHERE email=?");
 $s->execute([$_POST['email']]);
 $a=$s->fetch();
 if($a && password_verify($_POST['password'],$a['password'])){
  $_SESSION['admin']=$a['name']; header("Location: dashboard.php");
 }
} ?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="container mt-5">
<h3>Admin Login</h3>
<form method="post">
<input class="form-control mb-2" name="email" type="email">
<input class="form-control mb-2" name="password" type="password">
<button class="btn btn-success">Login</button>
</form></body></html>
