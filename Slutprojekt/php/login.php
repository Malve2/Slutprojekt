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
    <div class="mainContainer">
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
            <a id="scrollLink" href="#scrollLink">Har inget konto? Skapa ett!</a>
        </div>
        <div  class="signUp">
            <h1>Regestrera dig!</h1>
                <form>
                    <label for="">e-post:</label>
                    <input type="email" placeholder="e-post" name="email">
                    <label for="">Användarnamn:</label>
                    <input type="text" placeholder="Användarnamn" name="username">
                    <label for="">Lösenord:</label>
                    <input type="password" placeholder="Lösenord" name="password">
                    <label for="">Repetera Lösenord:</label>
                    <input type="password" placeholder="Repetera Lösenord" name="password">
                    <input type="submit" value="Fortsätt">
                </form>
        </div>
    </div>
    

    <?php
        require_once("footer.php")
    ?>
</body>
</html>
<script src="../scripts/ "></script>


