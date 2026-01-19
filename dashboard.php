
<?php session_start(); require 'db.php';
if(!isset($_SESSION['admin'])) header("Location: login.php");
$total=$db->query("SELECT COUNT(*) FROM users")->fetchColumn();
$active=$db->query("SELECT COUNT(*) FROM users WHERE status='active'")->fetchColumn();
$blocked=$db->query("SELECT COUNT(*) FROM users WHERE status='blocked'")->fetchColumn();
?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head><body class="container mt-4">
<h2>BBUC WiFi Management Dashboard</h2>
<div class="row text-center">
<div class="col">Total Users<br><b><?=$total?></b></div>
<div class="col">Active<br><b><?=$active?></b></div>
<div class="col">Blocked<br><b><?=$blocked?></b></div>
</div>
<canvas id="chart"></canvas>
<script>
new Chart(document.getElementById('chart'),{
 type:'bar',
 data:{labels:['Active','Blocked'],datasets:[{data:[<?=$active?>,<?=$blocked?>]}]}
});
</script>
<a href="users.php">Manage Users</a> | <a href="logout.php">Logout</a>
</body></html>
