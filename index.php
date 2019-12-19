<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Portfolio</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="#h1"><img src="images/logo.png"></a>

                <ul>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>

            <h1 id="h1">DUBOIS Anthony<br>
                Développeur / Intégrateur Web Junior</h1>
            
            <img src="images/setup.png" id="setup">

            <?php require 'about.php'; ?>

            <?php require 'competences.php'; ?>

            <?php require 'portfolio.php'; ?>

            <?php require 'contact.php'; ?>
        </main>

        <footer>
            <p>© Conception et réalisation par DUBOIS Anthony</p>
        </footer>
    </body>
</html>