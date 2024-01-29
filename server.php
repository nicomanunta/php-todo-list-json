<?php
    $todolist = file_get_contents("todolist.json");
    header ("Content-type: application/json");

    echo $todolist;
?>