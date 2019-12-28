<form action="" method="POST">
    ユーザー名：
    <input type="text" name="name">
    <input type="submit" value="送信">
</form>

<?php 
    if (isset($_POST['name'])) {
        require_once "../../src/database/insert.php";
        $databaseInsert = new DatabaseInsert();
        $databaseInsert->Insert($_POST['name']);
    }
?>
