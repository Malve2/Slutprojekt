<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En toffla</title>
    <link rel="stylesheet" href="../styles/productInfoSiteStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    require_once("header.php");
    ?>
    <div class="productimageContainer">
        <img class="bigImage active" src="../pictures/foppatofflor-crocs-classic-clog-navy.png" alt="">
        <img class="bigImage hidden" src="../pictures/HoldingUpCrocsInDifferentColors.jpg" alt="">
        <img class="bigImage hidden" src="../pictures/ManHoldingGulCroc.png" alt="">
        <img class="bigImage hidden" src="../pictures/LotsOfCrocs.jpg" alt="">
        <img class="bigImage hidden" src="../pictures/CrocLogoCartoon.jpg" alt="">
    </div>
    <div class="smallImageContainer">
        <img class="smallImage" src="../pictures/foppatofflor-crocs-classic-clog-navy.png" alt="">
        <img class="smallImage" src="../pictures/HoldingUpCrocsInDifferentColors.jpg" alt="">
        <img class="smallImage" src="../pictures/ManHoldingGulCroc.png" alt="">
        <img class="smallImage" src="../pictures/LotsOfCrocs.jpg" alt="">
        <img class="smallImage" src="../pictures/CrocLogoCartoon.jpg" alt="">
    </div>
    <div class="productInfoContainer">
        <div class="titleContainer">
            <h1>Toffla (blå)</h1>
            <p>100kr/månad</p>
        </div>

        <a href="#" class="button">Hyr nu!!!!</a>    
        
        <div class="textContainer">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit doloremque distinctio ullam atque consectetur quis
                 recusandae magni repellat quae est nam sed dolorem deleniti, numquam beatae consequuntur illo amet. Perferendis!</p>
        </div>
        <div class="specifications">
            <p>Färg: Blå</p>
            <P>Möjlig storlek (mm): 12, 13, 14, 15, 16, 220</P>

        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>
</html>
<script src="../scripts/productInfoSite.js"></script>