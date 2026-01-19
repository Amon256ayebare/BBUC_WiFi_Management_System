<?php
session_start();

/* If logged in → dashboard */
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

/* If not logged in → login */
header("Location: login.php");
exit;
