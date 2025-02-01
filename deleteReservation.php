<?php
include('src/api.php');

$id = $_GET['id'];
deleteReservation($id);

header("Location: index.php");
exit();
?>
