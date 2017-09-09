<?php
$db = new PDO('mysql:host=localhost;dbname=imrandb;charset=utf8mb4', 'root', '');
$_POST['optradio'] = implode(', ',$_POST['optradio']);
$_POST['image'] = $_FILES['image']['name'];
$_POST['dob'] = $_POST['day'].' - '.$_POST['month'].' - '.$_POST['year'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
move_uploaded_file($tmp_name, 'img/'.$img_name);

$query = "UPDATE `user_info` SET `name` = '".$_POST['name']."', `email` = '".$_POST['email']."', `password` = '".$_POST['password']."', `confirm` = '".$_POST['confirm']."', `phone` = '".$_POST['phone']."', `radio` = '".$_POST['radio']."', `optradio` = '".$_POST['optradio']."', `dob` = '".$_POST['dob']."', `image` = '".$_POST['image']."' WHERE `user_info`.`id` = ".$_POST['id'];
$result = $db->exec($query);

header('location:user_profile.php?id='.$_POST['id']);

if($result){
    echo "Data Update Successfully";
}else{
    echo "Dur mia kaj hoi ni";
}


