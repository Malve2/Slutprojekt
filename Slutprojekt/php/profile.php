<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/profileStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Min profil</title>
</head>
<body>
    <?php
        require_once("header.php")
    ?>
    <div class="mainContainer">
        <h1>Min profil</h1>
        <div class="profileContainer">
            <img src="../pictures/alfredAnsikte.jpg" alt="">
            <div class="profileInfoContainer">
                <h2>Alfred:</h2>
                <p>e-post: alfred.peterson@vbu.se</p>
                <p>Address: Alfredgatan 7</p>
                <p>Lösenord: **</p>
                <p>Användarnamn: Alfred</p>
        </div>
            
        </div>
        
        
        <div class="logoutContainer">
            <a class="button" href="#">Ändra uppgifter</a>
            <a class="button" href="logout.php">Logga ut</a>
        </div>
    </div>
    <div class="myProducts">
        <h1>Mina produkter:</h1>
        <div class="product">
            <h2>Toffla</h2>
            <img src="../pictures\KnasigaTofflorGulVItOrange.png" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, doloribus.</p>
            <a class="button" href="productInfoSite.php">Visa produkt</a>
        </div>
    </div>
    

    <?php
        require_once("footer.php")
    ?>
</body>
</html