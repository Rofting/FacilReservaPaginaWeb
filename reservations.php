<?php
include('src/api.php');
$reservations = getReservations();
include('templates/header.php');
?>

<div class="container">
    <h1 class="text-center text-primary">Reservation List</h1>

    <div class="text-right mb-4">
        <a href="addReservation.php" class="btn btn-success">Add Reservation</a>
    </div>

    <div class="row mt-4" id="restaurants-list">
        <?php foreach ($reservations as $reservation): ?>
            <div class="col-md-4">
                <div class="card p-3">
                    <h4 class="text-success"><?php echo $reservation['nameReservation']; ?></h4>
                    <p><strong>ID:</strong> <?php echo $reservation['id']; ?></p>
                    <p><strong>Date:</strong> <?php echo $reservation['dateReservation']; ?></p>
                    <p><strong>Number of people:</strong> <?php echo $reservation['persons']; ?> people</p>
                    <p><strong>Confirmed:</strong> <?php echo $reservation['confirmation']; ?> available</p>
                    <a href="reservations.php?restaurant_id=<?php echo $reservation['id']; ?>" class="btn btn-primary">Go to Reservations</a>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="editReservation.php?id=<?php echo $reservation['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="deleteReservation.php?id=<?php echo $reservation['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this reservation?');">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-4">
        <a href="./index.php" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

<?php
include('templates/footer.php');
?>
