<?php
include('src/api.php');
include('templates/header.php');

$id = $_GET['id'];
$reservation = getReservationById($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'nameReservation' => $_POST['nameReservation'],
        'dateReservation' => $_POST['dateReservation'],
        'persons' => $_POST['persons'],
        'confirmation' => $_POST['confirmation']
    ];

    updateReservation($id, $data);
    header("Location: reservations.php");
    exit();
}
?>

<div class="container">
    <h2 class="text-center text-primary">Editar Reserva</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre de la Reserva</label>
            <input type="text" name="nameReservation" class="form-control" value="<?php echo $reservation['nameReservation']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="dateReservation" class="form-control" value="<?php echo $reservation['dateReservation']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Personas</label>
            <input type="number" name="persons" class="form-control" value="<?php echo $reservation['persons']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirmación</label>
            <select name="confirmation" class="form-control">
                <option value=true>Sí</option>
                <option value=false>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="reservations.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include('templates/footer.php'); ?>
