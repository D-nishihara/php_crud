<?php 
    if (isset($_POST['editname'])) {
        require_once "../../src/database/update.php";
        $databaseUpdate = new DatabaseUpdate();
        $databaseUpdate->SelectUpdate($_POST['editid'], $_POST['editname']);
    }
?>