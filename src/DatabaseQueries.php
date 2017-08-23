<?php
require_once 'General.php';

class DatabaseQueries extends General
{
    public static function sqlQueryData(string $sql)
    {
        return General::getConnection()->query($sql);
    }

    private static function confirmResult($result)
    {
        if (is_bool($result)){
            return false;
        }

        return $result;
    }

    public static function getAllData($result)
    {
        if (!self::confirmResult($result)){
            return false;
        }

        $dataArray = [];

        while ($row = $result->fetch_object()) {
            $dataArray[] = $row;
        }

        if (count($dataArray) > 0) {
            return $dataArray;
        } else {
            return false;
        }

    }

    protected function escapeString($string)
    {
        $escapedString = mysqli_real_escape_string(General::getConnection(), $string);

        return $escapedString;
    }

}