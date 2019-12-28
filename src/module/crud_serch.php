<?php 
    require_once "../../src/database/serch.php";
    $serch = new DatabaseSerch();
    $tdsts = $serch->AllSerch();
    if ($tdsts != null) : 
?>
    <table>
        <tr>
            <th>ユーザーID</th>
            <th>ユーザー名</th>
            <th colspan="2"></th>
        </tr>
        <?php foreach ($tdsts as $tdst) : ?>
            <form action="../../src/module/crud_delete.php" method="POST">
                <tr>
                    <td><input type="text" name="user_id" value="<?php echo "$tdst[user_id]" ?>"></td>
                    <td><input type="text" name="user_name" value="<?php echo "$tdst[user_name]" ?>"></td>
                    <td><input type="submit" name="delete" value="削除"></td>
                    <td><input type="button" name="edit" value="編集"></td>
                </tr>            
            </form>
        <?php endforeach ?>    
    </table>
    <script src="../../src/js/crud_serch.js"></script>
<?php endif ?>