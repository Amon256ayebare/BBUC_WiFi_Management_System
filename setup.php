<?php
require 'db.php';

/* Check if admin already exists */
$check = $db->query("SELECT COUNT(*) FROM admins")->fetchColumn();
if ($check > 0) {
    die("Admin already exists. Delete setup.php now.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    echo "Admin created successfully. <a href='login.php'>Login</a>";
    exit;
}
?>

<h2>Create First Admin</h2>
<form method="POST">
    <input type="text" name="username" required placeholder="Admin username"><br><br>
    <input type="password" name="password" required placeholder="Admin password"><br><br>
    <button>Create Admin</button>
</form>
