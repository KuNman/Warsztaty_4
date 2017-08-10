<?php
require_once 'General.php';

class DatabaseQueries extends General
{
    public static function sqlQueryData(string $sql) {
        $result = General::getConnection()->query($sql);
        return $result;
    }

    public static function getAllData(mysqli_result $result) {
        $dataArray = [];
        while ($row = $result->fetch_assoc()) {
            $dataArray[] = $row;
        }
        if (count($dataArray) > 0) {
            return $dataArray;
        } else {
            return 'Brak wyników';
        }
    }

}