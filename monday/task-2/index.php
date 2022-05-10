


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="city">your favorite city is:</label>
        <input type="text" name="city">
        <br>
        <input type="submit" name="sub">
    </form>
</body>
</html>
<?php
if(isset($_POST["sub"])){
    echo $_POST['city'];
}

?>


