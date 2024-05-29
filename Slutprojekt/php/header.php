        <link rel="stylesheet" href="../styles/headerStyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   
    <header>

        <ul id="dropdownMenu" class="dropdown">
            <i id="dropdownBars" class="fa fa-bars" aria-hidden="true"></i>
            <i id="dropdownMenuClose" class="fa fa-times"></i>


            <li>
                <?php
                session_start();
                    if(empty($_SESSION["loggedIn"]))
                    {
                        echo"
                        <a href='login.php'>
                            <h1>
                                Logga in
                            </h1>
                            <i class='fa fa-user'></i>
                        </a>";
                    }
                    else
                    {
                        echo"
                        <a href='profile.php'>
                            <h1>
                                Min profil
                            </h1>
                            <i class='fa fa-user'></i>
                        </a>
                        ";
                    }
                ?>
                
            </li>
            <li>
                <a href="productSite.php">
                    <h1>
                        Produkter
                    </h1>
                    <i class="fa fa-shopping-bag"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <h1>
                        skit3
                    </h1>
                </a>
            </li>
            <li>
                <a href="#">
                    <h1>
                        skit3
                    </h1>
                </a>
            </li>
            <li>
                <a href="#">
                    <h1>
                        skit3
                    </h1>
                </a>
            </li>

        </ul>

        <a id="title" href="index.php">Tofflotek</a>

        <a id="homeLink" href="index.php">
            <i class="fa fa-home"></i>
        </a>
    </header>

<script src="../scripts/header.js"></script>