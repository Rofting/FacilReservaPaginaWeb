<?php
include('src/api.php');
$reservations = getReservations();
include('templates/header.php');
?>

    <div class="container">
        <h1 class="text-center text-primary">Lista de Reservas</h1>

        <div class="row mt-4" id="restaurants-list">
            <?php foreach ($reservations as $reservation): ?>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4 class="text-success"><?php echo $reservation['nameReservation']; ?></h4>
                        <p><strong>ID:</strong> <?php echo $reservation['id']; ?></p>
                        <p><strong>Fecha:</strong> <?php echo $reservation['dateReservation']; ?></p>
                        <p><strong>Numero de personas:</strong> <?php echo $reservation['persons']; ?> personas</p>
                        <p><strong>Confirmada:</strong> <?php echo $reservation['confirmation']; ?> disponible</p>
                        <a href="reservations.php?restaurant_id=<?php echo $reservation['id']; ?>" class="btn btn-primary">Ir a Reservas</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-4">
            <a href="./index.php" class="btn btn-secondary">Volver al inicio</a>
        </div>
    </div>

<?php
include('templates/footer.php');
