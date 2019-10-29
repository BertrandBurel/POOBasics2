<?php
    require_once 'Car.php';
    require_once 'Bicycle.php';
    require_once 'Truck.php';

    $cycle = new Bicycle('blue', 1);
    echo 'Bicycle :' . '<br>';
    echo $cycle->start() . '<br>';
    echo $cycle->forward() . '<br>';
    echo $cycle->brake() . '<br>';
    var_dump($cycle);
    echo '<br>';
    $car = new Car('green', 4, 'electric');
    echo 'Car :' . '<br>';
    echo $car->start() . '<br>';
    echo $car->forward() . '<br>';
    echo $car->brake() . '<br>';
    var_dump($car);
    echo '<br>';
    $truck = new Truck('green', 4, 'electric', 50);
    echo 'Truck :' . '<br>';
    echo $truck->start() . '<br>';
    echo $truck->forward() . '<br>';
    echo $truck->brake() . '<br>';
    echo $truck->loadingLevel() . '<br>';
    var_dump($truck);