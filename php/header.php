<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
        - #PRIMARY META TAGSS
    -->
    <title>Adukaz Travels and Tours</title>
    <meta name="title" content="Adukaz Travels and Tours">
    <meta name="description" content="A travel template website">

     <!--
        - #FAVICON
     -->
    <link rel="shortcut icon" href="./AdukazFavicon.svg">

      <!--
        - #GOOGLE FONT LINKS
    -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

 <!--
        - #CUSTOM CSS LINKS
    -->
    <link rel="stylesheet" href="./assets/css/style.css"> 
    
 
     <!--
        - #PRELOAD IMAGES
    -->

    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
    <link rel="preload" as="image" href="./AdukazFavicon.svg">

</head>

<body>
    
      <!--
        - #PRELOADER
    -->
    <div class="preloader" data-preloader>
        <div class="preloader-inner">
            <img src="./AdukazFavicon.svg" width="50" height="50" alt="" class="img">
        </div>
    </div>

      <!--
        - #HEADER
    -->

    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
                <img src="assets/images/Adukaz_Hlogo2.png" width="187px" height="48px" 
                alt="logo">
             </a>

             <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="./assets/images/Adukaz_Hlogo2.png" width="187px" height="38px" 
                        alt="logo">
                     </a>
                     <button class="nav-toggle-btn" aria-label="close menu" 
                     data-nav-toggler>
                     <ion-icon name="close-outline" aria-hidden="true" style="color: rgb(255, 229, 177)"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="index.php" class="navbar-link">Home</a><!--add avtive to navbar-link to show avtive tab!-->
                    </li>

                    <li class="navbar-item">
                        <a href="about_us.php" class="navbar-link">About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#gallery" class="navbar-link">services</a>
                    </li>

                    <li class="navbar-item">
                        <a href="faq.php" class="navbar-link">Faq</a>
                    </li>
                </ul>

            <!--    <div class="header-action">
                    <a href="#" class="login-btn">Login</a>
                    <a href="#" class="btn btn-primary">Sign Up</a>

                </div>!-->

             </nav>

             <button class="nav-toggle-btn" aria-label="open menu"
              data-nav-toggler>
              <ion-icon name="menu-outline" aria-hidden="true" style="color: rgb(255, 229, 177)"></ion-icon>
             </button>

             <div class="overlay" data-overlay data-nav-toggler></div>
             
        </div>
    </header>


