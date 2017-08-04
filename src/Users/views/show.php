<?php
require_once '../../DatabaseQueries.php';

$select = new DatabaseQueries();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Imie</title>
</head>
<body>
<?php $select->sqlSelectAll('users'); echo 'ok';?>
</body>
</html>