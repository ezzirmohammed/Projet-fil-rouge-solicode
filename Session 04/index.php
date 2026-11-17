<?php

require_once 'donnees.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDHOUR | Local Roots, Global Opportunities</title>

    <link rel="stylesheet" href="style.css">

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->

    <header>
        <nav>

            <div class="logo">
                <img src="images/logo/LOGO JUDHOUR.png" alt="Judhour">
            </div>

            <div class="navigation">
                <a href="#home">Home</a>
                <a href="#products">Products</a>
                <a href="#cooperatives">Cooperatives</a>
                <a href="#about">About</a>
            </div>

            <div class="language">
                <a href="#">FR</a>
                <span>|</span>
                <a href="#">EN</a>
            </div>

        </nav>
    </header>


    <!-- HOME SECTION -->

    <section id="home">

        <div class="home-content">

            <p class="welcome">WELCOME TO JUDHOUR</p>

            <h1>
                Local roots,
                <br>
                Global Opportunities
            </h1>

            <p class="description">
                Discover authentic Moroccan products and connect with local cooperatives.
            </p>

            <div class="home-buttons">
                <a href="#products">Explore Products</a>
                <a href="#cooperatives">Discover Cooperatives</a>
            </div>

        </div>

        <div class="home-image">
            <img src="images/logo/HERO JUDHOUR.png" alt="Moroccan Cooperatives products">
        </div>

    </section>


    <!-- COOPERATIVES SECTION -->

    <section id="cooperatives">

        <p>DISCOVER OUR PARTNERS</p>

        <h2>Top 3 Cooperatives</h2>

        <div class="cooperatives-container">

            <?php foreach ($cooperatives as $cooperative) { ?>

                <div class="cooperative-card">

                    <img
                        src="<?php echo $cooperative['image']; ?>"
                        alt="<?php echo $cooperative['nom']; ?>"
                    >

                    <h3>
                        <?php echo $cooperative['nom']; ?>
                    </h3>

                    <p>
                        <?php echo $cooperative['region']; ?>
                    </p>

                    <p>
                        <?php echo $cooperative['specialite']; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

    </section>


    <!-- PRODUCTS SECTION -->

    <section id="products">

        <p>OUR ORGANIC SELECTION</p>

        <h2>Top 3 Organic Products</h2>

        <div class="products-container">

            <?php foreach ($produits as $produit) { ?>

                <div class="product-card">

                    <img
                        src="<?php echo $produit['image']; ?>"
                        alt="<?php echo $produit['nom']; ?>"
                    >

                    <h3>
                        <?php echo $produit['nom']; ?>
                    </h3>

                    <p>
                        <?php echo $produit['categorie']; ?>
                    </p>

                    <p>
                        Price: <?php echo $produit['prix']; ?> MAD
                    </p>

                    <?php if ($produit['disponible'] == true) { ?>

                        <p>Available</p>

                    <?php } else { ?>

                        <p>Currently unavailable</p>

                    <?php } ?>

                </div>

            <?php } ?>

        </div>

    </section>


    <!-- VALUES SECTION -->

    <section id="values">

        <p>WHAT WE BELIEVE IN</p>

        <h2>Our Values</h2>

        <div class="values-container">

            <div class="value">

                <h3>Authenticity</h3>

                <p>
                    We celebrate authentic Moroccan products and traditional craftsmanship.
                </p>

            </div>

            <div class="value">

                <h3>Sustainability</h3>

                <p>
                    We support responsible production and respect for nature.
                </p>

            </div>

            <div class="value">

                <h3>Community</h3>

                <p>
                    We create opportunities for local cooperatives to grow together.
                </p>

            </div>

        </div>

    </section>


    <!-- ABOUT SECTION -->

    <section id="about">

        <p>OUR MISSION</p>

        <h2>Rooted in Heritage, Growing Together.</h2>

        <p>
            We connect local cooperatives with buyers and new opportunities.
        </p>

    </section>


    <!-- FOOTER -->

    <footer>

        <div class="footer-content">

            <img
                src="images/logo/LOGO JUDHOUR WHITE.png"
                alt="JUDHOUR LOGO"
            >

        </div>

    </footer>

</body>

</html>
