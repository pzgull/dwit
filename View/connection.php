<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_SESSION['login'])) {
    ?>
    <form action="./index.php?route=connect" method="post">
        <input type="text" name="pseudo">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
} else {
    echo $_SESSION['login'];
}
?>
</body>
</html>