<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="ja">
        <title>Pokemn</title>
        <link rel="stylesheet" href="../css/crud.css" type="text/css">
        <link rel="stylesheet" href="../css/crud_serch.css" type="text/css">
    </head>
    <body>
        <div class="div-body">
            <div class="div-insert flex-item">
                <?php include_once('../../src/module/crud_insert.php'); ?>
            </div>
            <div class="div-serch flex-item">
                <?php include_once('../../src/module/crud_serch.php'); ?>
            </div>
        </div>
    </body>
</html>