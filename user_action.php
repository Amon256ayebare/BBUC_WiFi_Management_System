
<?php require 'db.php';
$id=$_GET['id']; $a=$_GET['a'];
if($a=='toggle'){
 $s=$db->query("SELECT status FROM users WHERE id=$id")->fetch();
 $n=$s['status']=='active'?'blocked':'active';
 $db->exec("UPDATE users SET status='$n' WHERE id=$id");
}
if($a=='delete'){ $db->exec("DELETE FROM users WHERE id=$id"); }
header("Location: users.php");
?>
