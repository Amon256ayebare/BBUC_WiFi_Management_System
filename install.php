
<?php
require 'db.php';
$db->exec("
CREATE TABLE IF NOT EXISTS admins (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 name TEXT, email TEXT UNIQUE, password TEXT
);
CREATE TABLE IF NOT EXISTS users (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 username TEXT,
 status TEXT DEFAULT 'active',
 bandwidth INTEGER DEFAULT 0
);
");
echo "Installed";
?>
