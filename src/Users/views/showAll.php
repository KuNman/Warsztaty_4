<?php
require_once '../Users.php';

$select = Users::getAllUsersObject();
var_dump($select);
$users = DatabaseQueries::getAllData($select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Imie</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>E-mail</th>
    </tr>
    <?php
    foreach ($users as $user) {
        echo '<tr><td>'.$user->id . '</td>' .
            '<td>'.$user->name . '</td>' .
            '<td>'.$user->surname . '</td>' .
            '<td>'.$user->email.'</td></tr>';
    }
    ?>
</table>
</body>
</html>