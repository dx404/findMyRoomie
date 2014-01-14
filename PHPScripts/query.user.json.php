<?php
/**
 * Output user objects as JSON objects
 */
// require_once 'class/User.php';
require_once 'class/User_v2.php';
$db = new mysqli("mydb.cs.unc.edu", "duozhao", "bison;2358+13", "comp426f12db");

$uid = $_GET['uid'];
$user = User::findByUID($uid);
$userJSON = $user->getJSON();
echo $userJSON;
?>

