<?php

class DatabaseQueries extends General
{
    public function sqlSelectAll(string $table) {
        $sql = "SELECT * FROM $table";
        $result = $this->getConnection()->query($sql);
        $row = $result->fetch_object();
        echo $row->name;
    }
}