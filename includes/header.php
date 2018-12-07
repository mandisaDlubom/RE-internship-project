<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</head>

<body>
<!-- Main container -->
<main class="main <?php echo $title_page; ?>">
    <!-- Nav -->
    <nav class="nav nav-down">
        <div class="grid container">
            <div class="nav-header">
                <div class="logo-container">
                    <a href="/index.php" title="Rootslive" class="logo-link">
                        <img class="logo-white logo"
                             src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994972/rootslive/roots-01-01-01.svg"
                             alt="Logo"
                             title="Rootslive Logo">
                        <img class="logo-black logo"
                             src="https://res.cloudinary.com/responsive-web-design/image/upload/c_scale,h_83,w_200/v1531994972/rootslive/roots-02.svg"
                             alt="Logo">
                    </a>
                </div>
                <div class="menu-container">
                    <div>
                        <a href="#" class="menu-trigger" id="menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="nav-container" class="nav-container">
                <ul class="nav-items">
                    <li class="nav-item visible-xs">
                            <span class="mobile-lang">
                                <span class="lang-item">Lt</span> /
                                <span class="lang-item active">En</span>
                            </span>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/about.php" title="About Rootslive" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/projects.php" title="Rootslive Projects" class="nav-link">projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/services.php" title="Rootslive Services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/contacts.php" title="Contact Rootslive" class="nav-link">Contacts</a>
                    </li>
                </ul>

                <div class="fav__container visible-xs">

                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994974/rootslive/white-love-icon.png"
                         alt="White heart"
                         class="mini-heart white-heart">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994970/rootslive/love-icon.png"
                         alt="Yellow heart"
                         class="mini-heart yellow-heart">
                    <span class="fav-text">favourite</span>

                </div>
            </div>
            <div class="lang-container hidden-xs">
                <div class="lang-items">
                    <div class="lang-items__container">
                        <span class="lang-item">
                            lt
                        </span>
                        <span class="lang-item active">
                            en
                        </span>
                    </div>
                    <span class="fav">
                            <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994974/rootslive/white-love-icon.png"
                                 alt="White heart"
                                 class="mini-heart white-heart">
                            <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994970/rootslive/love-icon.png"
                                 alt="Yellow heart"
                                 class="mini-heart yellow-heart">
                            <span class="fav-text"> favourite</span>
                        </span>
                </div>
            </div>
        </div>
    </nav>
