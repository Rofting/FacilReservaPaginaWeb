<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome to our API</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
            margin-top: 100px;
        }
        .btn-lg {
            padding: 15px 30px;
            font-size: 20px;
        }
    </style>
</head>
<body>";
?>

<?php include('templates/header.php'); ?>

<div class="container">
    <h1 class="display-4 text-primary">Welcome to FacilReserva</h1>
    <p class="lead">Easily check restaurants and reservations.</p>
    <div class="mt-4">
        <a href="restaurants.php" class="btn btn-primary btn-lg">View Restaurants</a>
        <a href="reservations.php" class="btn btn-secondary btn-lg">View Reservations</a>
    </div>
</div>

<?php include('templates/footer.php'); ?>

<?php
echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>";
?>
