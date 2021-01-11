<!DOCTYPE html>
<HTML>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="jquery.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="content">
        <p class="logo">PT. Globalindo Intimates</p>
            <div class="navbar">
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=product">Product</a></li>
                    <li><a href="index.php?page=achievement">Achievement</a></li>
                    <li><a href="index.php?page=event">Event</a></li>
                    <li><a href="index.php?page=aboutus">About US</a></li>
                    <li><a href="index.php?page=visitor">Visitor</a></li>
                    <li><a href="index.php?page=login">Login</a></li>
                </ul>
            </div>

            <div class="isi">
                <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        switch ($page){
                            case 'home': 
                                include "halaman/home.php";
                                break;
                            
                            case 'product':
                                include "halaman/product.php";
                                break;

                            case 'achievement':
                                include "halaman/achievement.php";
                                break;

                            case 'event':
                                include "halaman/event.php";
                                break;

                            case 'aboutus':
                                include "halaman/aboutus.php";
                                break;

                            case 'visitor':
                                include "halaman/visitor.php";
                                break;

                            case 'login':
                                include "halaman/login.php";
                                break;

                        }
                    }

                    else {
                        include 'halaman/home.php';
                    }

                ?>
                
            </div>

        </div>
    </body>
</HTML>