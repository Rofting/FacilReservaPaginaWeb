<?php
define('API_BASE_URL', 'http://localhost:8080');
// Función para obtener Restaurantes
function getRestaurants() {
    $url = API_BASE_URL . "/restaurants";
    $response = file_get_contents($url);
    return json_decode($response, true);
}
// Función para obtener Reservas
function getReservations() {
    $url = API_BASE_URL . "/reservations";
    $response = file_get_contents($url);
    return json_decode($response, true);
}

function getReservationByRestaurantId($restaurantId){
    $url = API_BASE_URL . "/restaurants/" . $restaurantId . "/reservations";
    $response = file_get_contents($url);
    return json_decode($response, true);
}
?>