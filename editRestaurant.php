<?php
include('src/api.php');

$id = $_GET['id'];
$restaurant = getRestaurantById($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'capacity' => $_POST['capacity'],
        'available' => $_POST['available'],
    ];

    updateRestaurant($id, $data);
    header("Location: index.php");
    exit();
}

include('templates/header.php');
?>

<div class="container">
    <h1 class="text-center">Modificar Restaurante</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="name" class="form-control" value="<?= $restaurant['name'] ?>" required>

        <label>Ubicación:</label>
        <input type="text" name="address" class="form-control" value="<?= $restaurant['address'] ?>" required>

        <label>Capacidad:</label>
        <input type="number" name="capacity" class="form-control" value="<?= $restaurant['capacity'] ?>" required>

        <label>Disponible:</label>
        <select name="available" class="form-control">
            <option value="1" selected>Sí</option>
            <option value="0">No</option>
        </select>

        <button type="submit" class="btn btn-warning mt-3">Modificar</button>
    </form>
</div>

<?php include('templates/footer.php'); ?>
