<?php
require "./Model/HumanBeing.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data with error handling (check if values exist)
    $weight = isset($_POST['weight']) ? (float)$_POST['weight'] : null;
    $height = isset($_POST['height']) ? (float)$_POST['height'] : null;

    if (is_null($weight) || is_null($height)) {
        echo "Please enter both weight and height.";
        exit;
    }

    $hb = new HumanBeing();
    $hb->setWeight($weight);
    $hb->setHeight($height);
    $hb->calculateBMI();

    echo "BMI : " . $hb->getBmi();
    echo "<br>";
    echo "Result : " . $hb->analyzeBmi();
}
