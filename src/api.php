<?php
define('API_BASE_URL', 'http://localhost:8080');
function getRestaurants() {
    $url = API_BASE_URL . "/restaurants";
    $response = file_get_contents($url);
    return json_decode($response, true);
}
function getReservations() {
    $url = API_BASE_URL . "/reservations";
    $response = file_get_contents($url);
    return json_decode($response, true);
}
function getRestaurantById($id) {
    $url = API_BASE_URL . "/restaurants/" . $id;
    $response = file_get_contents($url);
    return json_decode($response, true);
}
function getReservationByRestaurantId($restaurantId){
    $url = API_BASE_URL . "/restaurants/" . $restaurantId . "/reservations";
    $response = file_get_contents($url);
    return json_decode($response, true);
}
function addRestaurant($data) {
    $url = API_BASE_URL . "/restaurants";
    $options = [
        'http' => [
            'header' => "Content-Type: application/json",
            'method' => 'POST',
            'content' => json_encode($data),
        ],
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);
}
// Función para modificar un Restaurante
function updateRestaurant($id, $data) {
    $url = API_BASE_URL . "/restaurants/" . $id;
    $options = [
        'http' => [
            'header' => "Content-Type: application/json",
            'method' => 'PUT',
            'content' => json_encode($data),
        ],
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);
}
function deleteRestaurant($id) {
    $url = API_BASE_URL . "/restaurants/" . $id;
    $options = [
        'http' => [
            'method' => 'DELETE',
        ],
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);
}
function getReservationById($id) {
    $url = API_BASE_URL . "/reservations/" . $id;
    $response = file_get_contents($url);
    return json_decode($response, true);
}
function addReservation($data) {
    $url = API_BASE_URL . "/reservations";
    $options = [
        'http' => [
            'header' => "Content-Type: application/json",
            'method' => 'POST',
            'content' => json_encode($data),
        ],
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);
}
function updateReservation($id, $data) {
    $url = API_BASE_URL . "/reservations/" . $id;
    $options = [
        'http' => [
            'header' => "Content-Type: application/json",
            'method' => 'PUT',
            'content' => json_encode($data),
        ],
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);
}
function deleteReservation($id) {
    $url = API_BASE_URL . "/reservations/" . $id;
    $options = [
        'http' => [
            'method' => 'DELETE',
        ],
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);
}
?>