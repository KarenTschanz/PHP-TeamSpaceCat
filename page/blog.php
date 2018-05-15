<! DOCTYPE html>
<?php 
$bdd = new PDO( 'mysql:host=localhost;dbname=articles', 'root', 'root');

$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication DESC');

?>
<html>

<head lang="eng">
    <meta charset="utf-8">
    <title>huni</title>

    <!--style css-->
    <link rel="stylesheet" type="text/css" href="../css/ttimport.css">
    <link rel="stylesheet" type="text/css" href="../css/page.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <script src="https://use.fontawesome.com/7a3008aa04.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <main id="page">
        <section id="titlePage">
            <h1>Blog</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </section>
        <!--titlePage-->

        <section id="welcome" class="textwelcome">
            <h3>Introzap feel free contact us, welcome </h3>
            <p>With the first month behind us and feet firmly planted in February, we are now well into 2017 now and have many exciting things happening at introzap.</p>
        </section>
        <!--welcome-->
        <!-- FIN A copier sur les autres pages-->

        <section id="blog" class="content">

            <ul>

            </ul>


            <?php while($a = $articles->fetch()){ ?>
            <article>
                <!--ARTICLE 1-->
                <div class="imgBlog">
                    <img src="miniatures/<?= $a['id'] ?>.jpg">
                </div>
                <div class="textBlog">
                    <h4>
                        <a href="blog_detail.php?id=<?= $a['id'] ?>">
                            <?= $a['titre'] ?>
                        </a>
                    </h4>
                    <p>
                        <?= $a['contenu'] ?>
                    </p>
                    
                    <a href="login.php?edit=<?= $a['id'] ?>">modifier</a>
                    <a href="suprimer.php?id=<?= $a['id'] ?>">supprimer</a>
                    
                    <div class="lienSocialBlog">
                        <a href="blog_detail.php?id=<?= $a['id'] ?>"><button type="text">Explore more</button></a>
                        <p>no comments yet</p>
                        <div class="buttonSocial0">
                            <a class="buttonSocial1" href="#"><span class="fa fa-facebook"></span>facebook</a>
                            <a class="buttonSocial2" href="#"><span class="fa fa-twitter"></span>twitter</a>
                        </div>
                    </div>
                </div>
                <!--textBlog-->
            </article>
            <!--ARTICLE 1-->
            <?php } ?>

            <div class="number">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">>></a>
            </div>

        </section>

        <!--A copier sur les autres pages-->
        <section id="recentNews" class="content">
            <p class="red">Trusted by developers and businesses of all sizes to enable worldwide connectivity.</p>
        </section>
        <!--recentNews-->

        <section id="partenaire" class="content">
            <img src="../asset/img/partenaire/aoSmith.jpg" alt="partenaire">
            <img src="../asset/img/partenaire/Inkling.jpg" alt="partenaire">
            <img src="../asset/img/partenaire/nelco.jpg" alt="partenaire">
            <img src="../asset/img/partenaire/river.jpg" alt="partenaire">
        </section>
        <!--partenaire-->

        <section id="demo">
            <div class="demotext">
                <h2>We offer Free demo for <br>new Customer</h2>
                <button type="button">Request a demo</button>
            </div>
        </section>
        <!--demo-->
    </main>

    <footer>
        <div class="recherche">
            <input id="adresseEmail" type="email" value="type your email" />
            <button type="submit" value="subscribe">subscribe</button>
        </div>
        <!--recherche-->
        <div class="box">
            <div class="social">
                <img src="../asset/img/logoblack2.png">
                <div class="ico">
                    <a href="https://twitter.com/?lang=fr"><span class="fa fa-facebook"></span></a>
                    <a href="https://twitter.com/?lang=fr"><span class="fa fa-twitter"></span></a>
                    <a href="https://twitter.com/?lang=fr"><span class="fa fa-pinterest-p"></span></a>
                    <a href="https://twitter.com/?lang=fr"><span class="fa fa-dribbble"></span></a>
                </div>
            </div>
            <!--social-->
            <div class="contact">
                <nav>
                    <ul>
                        <li><a href="#">+8801912704287</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support Resources</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </nav>
            </div>
            <!--contact-->
            <div class="nav2">
                <nav>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </nav>
            </div>
            <!--nav2-->
        </div>
        <!--box-->
        <div class="subfooter">Copyright 2017 © <span>2017, Huni</span> All rights reserved.</div>
    </footer>

</body>

</html>
