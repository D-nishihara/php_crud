<?php 
    if (isset($_POST['delete'])) {
        require_once "../../src/database/delete.php";
        $databaseDelete = new DatabaseDelete();
        $databaseDelete->SelectDelete($_POST['user_id'], $_POST['user_name']);
        header("Location: ../../static/html/crud.php");
    }
?>