<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="section11.php" method="get">
        Yourname:
        <input type="text" name="username" />
        <input type="submit" value="submit" />
    </form>
    <br>

    <?php
    if (isset($_GET["username"])) {
        echo $_GET["username"];
    }
    ?>
</body>

</html>