<?php
include('src/api.php');
include('templates/header.php');

// Obtener la lista de restaurantes para mostrarlos en el formulario
$restaurants = getRestaurants();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'restaurant_id' => $_POST['restaurant_id'],
        'nameReservation' => $_POST['nameReservation'],
        'dateReservation' => $_POST['dateReservation'],
        'persons' => $_POST['persons'],
        'confirmation' => $_POST['confirmation']
    ];

    $response = addReservation($data);
    header("Location: reservations.php");
    exit();
}
?>

<div class="container">
    <h2 class="text-center text-primary">Añadir Reserva</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Seleccione un Restaurante</label>
            <select name="restaurant_id" class="form-control" required>
                <option value="">-- Seleccione un Restaurante --</option>
                <?php foreach ($restaurants as $restaurant): ?>
                    <option value="<?php echo $restaurant['id']; ?>"><?php echo $restaurant['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre de la Reserva</label>
            <input type="text" name="nameReservation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="dateReservation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Personas</label>
            <input type="number" name="persons" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirmación</label>
            <select name="confirmation" class="form-control">
                <option value=true>Sí</option>
                <option value=false>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="reservations.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('templates/footer.php'); ?>
