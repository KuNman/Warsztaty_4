<?php
//require_once '../../General.php';

$data = General::getData();

foreach ($data['users'] as $user) {

    foreach ($user as $value) {
        echo $value . ' ';
    }

    echo '<br/>';
}