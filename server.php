<?php
    $todoList = file_get_contents("todolist.json");

    $list = json_decode($todoList, true);
    if(isset($_POST["newText"])){
        $newText = $_POST["newText"];

        array_push($list, $newText);

        file_put_contents("todolist.json", json_encode($list));

    }
    header ("Content-type: application/json");

    echo json_encode($list);
?>
