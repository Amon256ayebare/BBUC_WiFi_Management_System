<?php
$db = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* Tables */
$db->exec("
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT UNIQUE,
    password TEXT,
    role TEXT DEFAULT 'user',
    status TEXT DEFAULT 'active',
    online INTEGER DEFAULT 0
)
");
