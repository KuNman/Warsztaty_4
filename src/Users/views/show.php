<?php
require_once '../../Users/Users.php';

$select = Users::getAllUsersArray();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Imie</title>
</head>
<body>
    <?php
    foreach ($select as $user) {
        echo $user->name . '<br>';

    }
    ?>
</body>
</html>