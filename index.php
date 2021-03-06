<! DOCTYPE html>
<html>
<?php $bdd = new PDO( 'mysql:host=localhost;dbname=huni-article', 'root', 'root'); ?>
<head lang="eng">
    <meta charset="utf-8">
    <title>huni</title>

    <!--style css-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/ttimport.css">


    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">


    <script src="https://use.fontawesome.com/7a3008aa04.js"></script>

</head>

<body>
    <header id="pinkMenu">
        <a href="index.php"><img src="asset/img/logo.png" alt="logo"/></a>
        <nav>
            <ul>
                <li><a href="#howItWork">How it Work</a></li>
                <li><a href="#download">Product</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="page/blog.php">Blog</a></li>
                <li><a href="page/contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="ttButton">
            <a href="#">Shop</a>
            <a href="page/login.php">Login</a>
        </div>
        <!--ttButton-->
    </header>

    <main>
        <section id="firstView">
            <div class="first">
                <div id="textFirstView" class="wow fadeInLeft" data-wow-delay="0.8s">
                    <h1>Huni Connect To <br>Your Device</h1>
                    <p>We Offer A Full Range introzap service in the worldwid just make your area save</p>
                    <div class="ttButton">
                        <a href="https://www.youtube.com/watch?v=v6bYTm4fEDo">Get Started</a>
                        <a href="http://www.priceminister.com/offer/buy/2501253466/transpalette-qui-pese.html">Buy Now</a>
                    </div>
                    <!--ttButton-->
                </div>
                <!--textFirstView-->
                <img class="wow fadeInUp" data-wow-delay="0.2s" src="asset/img/macbook.png" alt="macBook">
            </div>
            <!--first-->
        </section>
        <!--FirstView-->

        <section id="youNeed" class="content wow fadeIn" data-wow-delay="0.2s">
            <div class="intro">
                <h2>Everything you need</h2>
                <p>After 5 years of working with other cellular providers and worrying about cellular data plans, Hologram allowed us to seamlessly deploy our devices.</p>
            </div>
            <!--intro-->
            <img class="mcBook" src="asset/img/macBookIphone.jpg" alt="macBookIphone">
            <div class="free wow fadeInRight" data-wow-delay="0.4s">
                <div class="free1">
                    <img src="asset/img/freeApp.jpg" alt="freeApp">
                    <h4>Free App Management</h4>
                    <p>Free app management rules to automate the process for employees</p>
                </div>
                <!--free1-->
                <div class="free2">
                    <img src="asset/img/freeApp.jpg" alt="freeDestop">
                    <h4>Free Destop Management</h4>
                    <p>Free Destop management rules to automate the process for employees</p>
                </div>
                <!--free1-->
            </div>
            <!--free-->
        </section>
        <!--youNeed-->

        <section id="giveHomeVoice" class="content wow fadeIn">
            <h2>Give your home a voice</h2>
            <div class="biais">
                <div class="rectangle"></div>
                <div class="triangle"></div>
            </div>
            <!--biais-->
            <p>You have enough to take care of when it comes to your home and your family. Notion lets you monitor your entire home, even when you aren’t there.</p>
        </section>
        <!--giveHomeVoice-->

        <section id="howItWork" class="content">
            <div class="intro wow fadeIn">
                <h2>How it Work</h2>
                <p>After 5 years of working with other cellular providers and worrying about cellular data plans, Hologram allowed us to seamlessly deploy our devices.</p>
            </div>
            <!--intro-->
            <div class="box">
                <article class="wow fadeIn" data-wow-delay="0.2s">
                    <img src="asset/img/easyInstall.jpg" alt="easyInstall">
                    <h3>Easy to install</h3>
                    <p>We built Notion to fit effortlessly into your home. Just pair, peel and stick! No complicated set-up</p>
                </article>
                <!--article1-->
                <article class="wow fadeIn" data-wow-delay="0.5s">
                    <img src="asset/img/globalEase.jpg" align="global">
                    <h3>Go Global with Ease</h3>
                    <p>Cellular networks are hard. Our global cell network makes it easy to connect your devices</p>
                </article>
                <!--article2-->
                <article class="wow fadeIn" data-wow-delay="0.8s">
                    <img src="asset/img/connectivity.jpg" alt="connectivity">
                    <h3>Connectivity in PC</h3>
                    <p>Easy Connectivity for machines, and pc ,laptop, mobile device Notion lets you monitor your entire home,</p>
                </article>
                <!--article3-->
            </div>
            <!--box-->
        </section>
        <!--howItWork-->

        <section id="citation" class="wow fadeIn">
            <!--put background backQuotes-->
            <div class="content">
                <img src="asset/img/quotes.png">
                <blockquote>
                    <p>After 5 years of working with other cellular providers and worrying about cellular data plans, Hologram allowed us to seamlessly deploy our devices around the world so we can focus more on using the data our devices generate.
                    </p>
                </blockquote>
                <div class="nom">
                    <div class="lineRed"></div>
                    <p>JEAN ROCHEFORT</p>
                </div>
            </div>
        </section>
        <!--citation-->

        <section id="pricing" class="wow fadeIn">
            <h2>Princing Plan</h2>
            <div class="content ttPricing">
                <div class="explication">
                    <h3>Pricing for the #1 Rated Online Timesheet Software</h3>
                    <div class="ttButton">
                        <a href="#">MONTHLY</a>
                        <a href="#">WEEKLY</a>
                    </div>
                    <!--ttButton-->
                    <p>With the free Developer Plan, Pay-as-You-Go, and Monthly plan options</p>
                    <h4>VIEW FULL PRICING DETAILS</h4>
                </div>
                <!--explication-->
                <div class="card">
                    <div class="card1">
                        <div class="cardRond"></div>
                        <div class="cardRectangle"></div>
                    </div>
                    <div class="textArticle">
                        <h3>Standard</h3>
                        <p class="price">$40</p>
                        <div class="blablacard">
                            <p class="planPay">Plan, Pay-as-You-Go, and Monthly plan options,</p>
                            <ul>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Up to 40 active</li>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Unlimited Profiles</li>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Unlimited Emails</li>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Ongoing success webinars</li>
                            </ul>
                        </div>
                        <!--blablacard-->
                        <a class="get" href="#">Get Started</a>
                    </div>
                    <!--textArticle-->
                </div>
                <!--card-->
                <div class="card">
                    <div class="card2">
                        <div class="cardRond"></div>
                        <div class="cardRectangle"></div>
                    </div>
                    <div class="textArticle">
                        <h3>Standard</h3>
                        <p class="price">$40</p>
                        <div class="blablacard">
                            <p class="planPay">Plan, Pay-as-You-Go, and Monthly plan options,</p>
                            <ul>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Up to 40 active</li>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Unlimited Profiles</li>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Unlimited Emails</li>
                                <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Ongoing success webinars</li>
                            </ul>
                        </div>
                        <!--blablacard-->
                        <a class="get" href="#">Get Started</a>
                    </div>
                    <!--textArticle-->
                </div>
                <!--card-->
            </div>
            <!--ttPricing-->
        </section>
        <!--pricing-->

        <section id="huniBenefits" class="content wow fadeIn">
            <div class="intro">
                <img src="asset/img/logoBlack.png" alt="logoBlack">
                <h2>Huni Benefits</h2>
                <p>After 5 years of working with other cellular providers and worrying about cellular data plans, Hologram allowed us to seamlessly deploy our devices.</p>
            </div>
            <!--intro-->
            <div class="box">
                <article class="wow fadeIn" data-wow-delay="0.2s">
                    <img src="asset/img/goGlobal.jpg">
                    <h3>Go Global with Ease</h3>
                    <p>Whether in the field or your garage, you can reliably track your device behavior, send over-the-air software updates</p>
                </article>
                <!--article1-->
                <article class="wow fadeIn" data-wow-delay="0.5s">
                    <img src="asset/img/stream.jpg">
                    <h3>Streamline Supply Chains</h3>
                    <p>Avoid sourcing parts and negotiating with telecoms when trying to build your IoT product. We abstract the hard parts to help</p>
                </article>
                <!--article1-->
                <article class="wow fadeIn" data-wow-delay="0.8s">
                    <img src="asset/img/scalable.jpg">
                    <h3>Scalable Infrastructure</h3>
                    <p>Whether in the field or your garage, you can reliably track your device behavior, send over-the-air software updates</p>
                </article>
                <!--article1-->
            </div>
            <!--box-->
        </section>
        <!--huniBenefits-->

        <section id="download">
            <div class="content downloadText">
                <div class="intro wow fadeIn">
                    <h2>Download Our Free Apps On You Device</h2>
                    <p>With the free Developer Plan, Pay-as-You-Go, and Monthly plan options, Hologram's IoT cellular platform offers simple, transparent pricing plans for getting started, building</p>
                </div>
                <!--intro-->
                <img class="iphone wow fadeIn" src="asset/img/iphone.png" alt="iphone" />
                <div class="ttButton">
                    <div class="buttonApple wow fadeInLeft">
                        <img class="imgButton apple" src="asset/img/icon/apple.png" />
                        <a href="#">Download Apple</a>
                    </div>
                    <div class="buttonGoogle wow fadeInRight">
                        <img class="imgButton google" src="asset/img/icon/google-play.png" />
                        <a href="#">Google Play</a>
                    </div>
                    <!--buttonGoogle-->
                </div>
                <!--ttButton-->
            </div>
            <!--/downloadText-->
        </section>
        <!--download-->

        <section id="recentNews" class="content">
            <div class="intro wow fadeIn">
                <h2>Recent News</h2>
                <p>Here small titles for recent Blog with other cellular providers and worrying about cellular data plans, Hologram allowed us to seamlessly deploy our devices.</p>
            </div>
            <!--intro-->
            <div class="box">
                <article class="wow fadeIn" data-wow-delay="0.2s">
                    <div class="greyBox"></div>
                    <h4>Things you need to know before renting out your home</h4>
                </article>
                <!--article1-->
                <article class="wow fadeIn" data-wow-delay="0.5s">
                    <div class="greyBox"></div>
                    <h4>Things you need to know before renting out your home</h4>
                </article>
                <!--article2-->
                <article class="wow fadeIn" data-wow-delay="0.8s">
                    <div class="greyBox"></div>
                    <h4>Things you need to know before renting out your home</h4>
                </article>
                <!--article3-->
            </div>
            <!--article3-->
            <p class="red">Trusted by developers and businesses of all sizes to enable worldwide connectivity.</p>
        </section>
        <!--recentNews-->

        <section id="partenaire" class="content">
            <img src="asset/img/partenaire/aoSmith.jpg" alt="partenaire">
            <img src="asset/img/partenaire/Inkling.jpg" alt="partenaire">
            <img src="asset/img/partenaire/nelco.jpg" alt="partenaire">
            <img src="asset/img/partenaire/river.jpg" alt="partenaire">
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
            <input id="adresseEmail" type="email" value="Type your email" />
            <button type="submit" value="subscribe">subscribe</button>
        </div>
        <!--recherche-->
        <div class="box">
            <div class="social">
                <img src="asset/img/logoblack2.png">
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

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
