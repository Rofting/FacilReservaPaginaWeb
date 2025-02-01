<?php
include('src/api.php');

$id = $_GET['id'];
deleteRestaurant($id);

header("Location: index.php");
exit();
?>
