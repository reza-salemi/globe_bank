<?php

    function find_all_subject()
    {
        global $db;
        $sql = "SELECT * FROM subjetcs ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_connect($db,$sql);
        return $result;
    }
?>