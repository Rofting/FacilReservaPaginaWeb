<?php
include('src/api.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'capacity' => $_POST['capacity'],
        'available' => $_POST['available'],
    ];

    addRestaurant($data);
    header("Location: index.php");
    exit();
}

include('templates/header.php');
?>

<div class="container">
    <h1 class="text-center">Añadir Restaurante</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="name" class="form-control" required>

        <label>Ubicación:</label>
        <input type="text" name="address" class="form-control" required>

        <label>Capacidad:</label>
        <input type="number" name="capacity" class="form-control" required>

        <label>Disponible:</label>
        <select name="available" class="form-control">
            <option value="1" selected>Sí</option>
            <option value="0">No</option>
        </select>



        <button type="submit" class="btn btn-success mt-3">Añadir</button>
    </form>
</div>

<?php include('templates/footer.php'); ?>
