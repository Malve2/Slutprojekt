<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/loginStyle.css">
</head>
<body>
    <?php
    require_once("header.php");
    ?>

    <div class="login">
        <h1>Logga in</h1>
        <form action="validation.php" method="post">
            <label for="">Användarnamn:</label>
            <input type="text" placeholder="Användarnamn" name="username">
            <label for="">Lösenord:</label>
            <input type="password" placeholder="Lösenord" name="password">
            <div class="checkboxSection">
                <label for="">Håll mig inloggad: </label>
                <input type="checkbox">
            </div>
            <input type="submit" value="Logga in">
        </form>
    </div>

    <?php
        require_once("footer.php")
    ?>
</body>
</html>


