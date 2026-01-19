<?php
require 'db.php';

$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $db->prepare(
    "INSERT INTO users (username, password, role, status)
     VALUES (?, ?, 'admin', 'active')"
);

$stmt->execute([$username, $password]);

echo "Admin created successfully.<br>
Username: admin<br>
Password: admin123";
