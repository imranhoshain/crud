<?php


$db = new PDO('mysql:host=localhost;dbname=imrandb;charset=utf8mb4', 'root', '');
$query = "DELETE FROM `user_info` WHERE `user_info`.`id` =".$_GET['id'];
$stmt = $db->exec($query);
if($stmt){
    header('location: all_user_list.php');
}
else{
    echo "Data Not Deleted!!!!";
}
?>    