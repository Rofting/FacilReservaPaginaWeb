<?php
include('src/api.php');
$restaurants = getRestaurants();
include('templates/header.php');
?>

<div class="container">
    <h1 class="text-center text-primary">Lista de Restaurantes</h1>

    <div class="row mt-4" id="restaurants-list">
        <?php foreach ($restaurants as $restaurant): ?>
            <div class="col-md-4">
                <div class="card p-3">
                    <h4 class="text-success"><?php echo $restaurant['name']; ?></h4>
                    <p><strong>ID:</strong> <?php echo $restaurant['id']; ?></p>
                    <p><strong>Ubicación:</strong> <?php echo $restaurant['address']; ?></p>
                    <p><strong>Capacidad:</strong> <?php echo $restaurant['capacity']; ?> personas</p>
                    <p><strong>Disponible:</strong> <?php echo $restaurant['available']; ?> disponible</p>
                    <a href="reservationRestaurant.php?restaurant_id=<?php echo $restaurant['id']; ?>" class="btn btn-primary">Ir a Reservas</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
    </div>
</div>

<?php
include('templates/footer.php');
