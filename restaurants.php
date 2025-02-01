<?php
include('src/api.php');
$restaurants = getRestaurants();
include('templates/header.php');
?>

<div class="container">
    <h1 class="text-center text-primary">Restaurant List</h1>

    <div class="text-right mb-4">
        <a href="addRestaurant.php" class="btn btn-success">Add Restaurant</a>
    </div>

    <div class="row mt-4" id="restaurants-list">
        <?php foreach ($restaurants as $restaurant): ?>
            <div class="col-md-4">
                <div class="card p-3">
                    <h4 class="text-success"><?php echo $restaurant['name']; ?></h4>
                    <p><strong>ID:</strong> <?php echo $restaurant['id']; ?></p>
                    <p><strong>Location:</strong> <?php echo $restaurant['address']; ?></p>
                    <p><strong>Capacity:</strong> <?php echo $restaurant['capacity']; ?> people</p>
                    <p><strong>Available:</strong> <?php echo $restaurant['available']; ?> available</p>
                    <a href="reservationRestaurant.php?restaurant_id=<?php echo $restaurant['id']; ?>" class="btn btn-primary">Go to Reservations</a>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="editRestaurant.php?id=<?php echo $restaurant['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="deleteRestaurant.php?id=<?php echo $restaurant['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this reservation?');">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

<?php
include('templates/footer.php');
?>
