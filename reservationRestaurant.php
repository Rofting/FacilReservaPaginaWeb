<?php
include('src/api.php');
include('templates/header.php');

// Verificar si se proporciona un restaurant_id en la URL
if (isset($_GET['restaurant_id'])) {
    $restaurant_id = $_GET['restaurant_id'];
    $reservations = getReservationByRestaurantId($restaurant_id);
} else {
    $reservations = [];
}
?>

<div class="container">
    <h1 class="text-center text-primary">Reservas del Restaurante</h1>

    <?php if (!empty($reservations)): ?>
        <div class="row mt-4">
            <?php foreach ($reservations as $reservation): ?>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4 class="text-success"><?php echo $reservation['nameReservation']; ?></h4>
                        <p><strong>ID:</strong> <?php echo $reservation['id']; ?></p>
                        <p><strong>Fecha:</strong> <?php echo $reservation['dateReservation']; ?></p>
                        <p><strong>Número de personas:</strong> <?php echo $reservation['persons']; ?> personas</p>
                        <p><strong>Confirmada:</strong> <?php echo $reservation['confirmation'] ? 'Sí' : 'No'; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center text-danger">No hay reservas para este restaurante.</p>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="restaurants.php" class="btn btn-secondary">Volver a Restaurantes</a>
    </div>
</div>

<?php include('templates/footer.php'); ?>
