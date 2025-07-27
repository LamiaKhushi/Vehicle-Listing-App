<?php

require_once "../../app/Classes/VehicleManager.php";

$vehicleManager = new VehicleManager("", "", "", "");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
    ];
    $vehicleManager->addVehicle($data);
    header('Location: view.php'); // redirect after adding
    exit;
}

include 'include/header.php';
?>

<div class="container my-4">
    <h1>Add Vehicle</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Vehicle Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Vehicle Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Vehicle</button>
    </form>
</div>
