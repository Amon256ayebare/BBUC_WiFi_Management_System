
<?php session_start(); require 'db.php';
if($_POST){
 $db->prepare("INSERT INTO users(username,bandwidth) VALUES(?,?)")
 ->execute([$_POST['username'], rand(10,100)]);
}
$users=$db->query("SELECT * FROM users");
?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="container mt-4">
<h3>User Management</h3>
<form method="post" class="mb-3">
<input class="form-control mb-2" name="username" placeholder="Username">
<button class="btn btn-primary">Add User</button>
</form>
<table class="table table-bordered">
<tr><th>User</th><th>Status</th><th>Bandwidth</th><th>Action</th></tr>
<?php foreach($users as $u): ?>
<tr>
<td><?=$u['username']?></td>
<td><?=$u['status']?></td>
<td><?=$u['bandwidth']?> MB</td>
<td>
<a href="user_action.php?id=<?=$u['id']?>&a=toggle">Toggle</a> |
<a href="user_action.php?id=<?=$u['id']?>&a=delete">Delete</a>
</td>
</tr>
<?php endforeach ?>
</table>
<a href="dashboard.php">Back</a>
</body></html>
