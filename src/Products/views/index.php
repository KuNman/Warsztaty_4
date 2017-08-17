<?php
require_once '../Products.php';

$data = General::getData();

foreach ($data['products'] as $product) {

    foreach ($product as $value) {
        echo $value . ' ';
    }

    echo '<br/>';
}

echo 'xxxxxxx' . $_POST['name'] . 'xxxxxxx';
