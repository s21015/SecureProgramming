<?php
session_start();
$id = $_SESSION['ID'];
if ($id == '') {
    die('ログインしてください');
}
?>
<html>
    <head><title>プロフィール</head></title>
    <body>
        ユーザーID：<?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>
</body>
</html>