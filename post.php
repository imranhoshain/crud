<?php
$db = new PDO('mysql:host=localhost;dbname=imrandb;charset=utf8mb4', 'root', '');

$_POST['optradio'] = implode(', ',$_POST['optradio']);
$_POST['image'] = $_FILES['image']['name'];
$_POST['dob'] = $_POST['day'].' - '.$_POST['month'].' - '.$_POST['year'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
move_uploaded_file($tmp_name, 'img/'.$img_name);

$query = "INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `confirm`, `phone`, `radio`, `optradio`, `dob`, `image`) VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirm']."', '".$_POST['phone']."', '".$_POST['radio']."', '".$_POST['optradio']."', '".$_POST['dob']."', '".$_POST['image']."');";
$result = $db->exec($query);


if($result){
    echo "Data Successfully Inserted..";
}
else{
    echo "Data NOt inserted!!!";
}

$db = null;

?>	
	
