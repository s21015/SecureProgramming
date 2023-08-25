<?php
sesseion_start();
$id = @$_POST['ID'];
$pwd = @$_POST['PWD'];
if ($id == '' || $pwd == '') {
    die('ログイン失敗');
}
$_SESSOIN['ID'] = $id;
?>
<html>
    <head><title>ログイン</title></head>
    <body>
        ログイン成功しました
        <a href = "31-022.php">プロフィール</a>
</body>
</html>