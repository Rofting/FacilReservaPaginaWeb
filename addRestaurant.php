<?php
include('src/api.php');
include('templates/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'capacity' => $_POST['capacity'],
        'available' => $_POST['available']
    ];

    $response = addRestaurant($data);
    header("Location: restaurants.php");
    exit();
}
?>

<div class="container">
    <h2 class="text-center text-primary">Añadir Restaurante</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Capacidad</label>
            <input type="number" name="capacity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Disponible</label>
            <select name="available" class="form-control">
                <option value=true>Sí</option>
                <option value=false>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="restaurants.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('templates/footer.php'); ?>
