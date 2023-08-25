<?php
$name = @$_POST['name'];
$mail = @$_POST['mail'];
$gender = @$_POST['gender'];
?>
<html>
    <head><title>確認</title></head>
    <body>
        <form action="31-004.php" method="POST">
            氏名：<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><br>
            メールアドレス：<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8');?><br>
            性別：<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><br>
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="mail" value="<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="gender" value="<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?>">
            <input type="submit" value="登録">
</form>
</body>
</html>