<?php 

// INI DB
$db = new PDO(
    'mysql:host=localhost;dbname=Spacecat', 'root', 'root'
);

if(isset($_POST['submit'])){

    //MAIL PARAM 
    if (empty($_POST['name'])){
        echo "Il manque votre nom";
        die;
    }
    else
    $name = $_POST['name'];
    
    if (empty($_POST['email'])){
        echo "Il manque votre email";
        die;
    }
    else 
    $email = $_POST['email'];

    if (empty($_POST['subject'])){
        echo "Il manque votre email";
        die;
    }
    else 
    $subject = $_POST['subject'];

    if (empty($_POST['message'])){
        echo "Il manque votre Message";
        die;
    }
    else 
    $message = $_POST['message'];

    //INSERTION DB
    $req = $db->prepare("SELECT COUNT(*) FROM `contact` WHERE Message = :message AND Email = :email");
    $req->bindParam(':message', $message);
    $req->bindParam(':email', $email);
    $req->execute();

    $count = $req->fetch();

    if($count[0] > 0)
    {
        echo "Formulaire déjà envoyé";
        die;
    }
    else
    $stmt = $db->prepare("INSERT INTO `Contact`
            (Nom, Email, Subject, Message) 
            VALUES
            (:name , :email , :subject , :message) 
            ");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    $destinataire = "doubleo.vk@gmail.com";
    $header = "exemple@test.com";
    $header .= "MIME-Version: 1.0\r\n";
    $header.='From:"spacecat@space.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message ='
    <html>
        <body>
            <div align="center">
                <br />
                <p> '. $_POST['message'] .' </p>
                <br />
            </div>
        </body>
    </html>
    ';

    mail($destinataire, $subject, $message, $header);
}

?>

<! DOCTYPE html>
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
		<header id="pinkMenu">
			<a href="../index.html"><img src="../asset/img/logo.png" alt="logo"/></a>
			<nav>
				<ul>
					<li><a href="../index.html#howItWork">How it Work</a></li>
					<li><a href="../index.html#download">Product</a></li>
					<li><a href="../index.html#pricing">Pricing</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
 				</ul>
			</nav>
			<div class="ttButton">
				<a href="#">Shop</a>
				<a href="login.php">Login</a>
			</div><!--ttButton-->
		</header>
		
		<main id="page">
			<section id="titlePage">
				<h1>Contact us</h1>
					<nav>
						<ul>
						    <li><a href="#">Home</a></li>
						    <li><a href="#">Contact</a></li>
						</ul>
					</nav>
			</section><!--titlePage-->	
			
			<section id="welcome" class="textwelcome">
				<h3>Introzap feel free contact us, welcome </h3>
				<p>With the first month behind us and feet firmly planted in February, we are now well into 2017 now and have many exciting things happening at introzap.</p>
			</section><!--welcome-->
			<!-- FIN A copier sur les autres pages-->
			
			<section id="letsTalk" class="content">
				<div class="TextLetsTalk">
					<h2>Let's talk</h2>
					<p>Suspe ndisse suscipit sagittis leo sit met dimentum estibulum issim posuere cubilia Curae Suspendisse at consectetur massa. Curabitur non ipsum nisinec dapibus elit. Donec nec</p>
				</div>
			</section>	
			
            <form action="" class="content" method="post">
                <input type="text" name="name" id="name" placeholder="Name" required/>
                <input type="email" name="email" placeholder="Email" required />
                <input type="text" name="subject" id="subject" placeholder="Subject" maxlength="40" required />
                <input class="message" type="text" name="message" id="message" placeholder="Message" required />
                <input name="submit" type="submit">
            </form>
			
            <?php if(isset($_POST['submit'])){
            	if($count[0] == 0){
            	echo '<div class="content"> Merci pour votre message ' . $name . ' </div>';
            	}
        	}
            ?>
			
			<section id="map">
               <iframe src="https://www.google.com/maps/d/embed?mid=1xiM95ILBpxYH3jMipETasKBVgx-WZ30O" width="640" height="480"></iframe>
                <div class="ico1">
                  <figure>
                      <div class="iconCont">
                        <a href="https://twitter.com/?lang=fr">
                        <span class="fa fa-map-marker"></span></a>
                     </div><!--iconCont-->
                      <figcaption>
                          <p>Barisal City , NY 10036, United States</p>
                        </figcaption>
                  </figure>
                   <figure>
                      <div class="iconCont">
                        <a href="https://twitter.com/?lang=fr">
                        <span class="fa fa-envelope-o"></span></a>
                     </div><!--iconCont-->
                      <figcaption>
                          <p>introzap_info@gmail.com</p>
                        </figcaption>
                  </figure>
                  <figure>
                      <div class="iconCont">
                        <a href="https://twitter.com/?lang=fr">
                        <span class="fa fa-phone"></span></a>
                     </div><!--iconCont-->
                      <figcaption>
                          <p>+8801713879773</p>
                        </figcaption>
                  </figure>
                  <div class="ico2">
                      <div class="iconCont">
                        <a href="https://twitter.com/?lang=fr">
                        <span class="fa fa-facebook"></span></a>
                     </div><!--iconCont-->
                      <div class="iconCont">
			             <a href="https://twitter.com/?lang=fr"><span class="fa fa-twitter"></span></a>
                     </div><!--iconCont-->
                      <div class="iconCont">
			             <a href="https://twitter.com/?lang=fr"><span class="fa fa-pinterest-p"></span></a>
                     </div><!--iconCont-->
                      <div class="iconCont">
			             <a href="https://twitter.com/?lang=fr"><span class="fa fa-dribbble"></span></a>
                     </div><!--iconCont-->
				    </div><!--ico2--> 
                </div><!--ico1-->   
			</section>
			
			
			<!--A copier sur les autres pages-->
			<section id="recentNews" class="content">
				<p class="red">Trusted by developers and businesses of all sizes to 
       enable worldwide connectivity.</p>
			</section><!--recentNews-->	
			
			<section id="partenaire" class="content">
				<img src="../asset/img/partenaire/aoSmith.jpg" alt="partenaire">
				<img src="../asset/img/partenaire/Inkling.jpg" alt="partenaire">
				<img src="../asset/img/partenaire/nelco.jpg" alt="partenaire">
				<img src="../asset/img/partenaire/river.jpg" alt="partenaire">
			</section><!--partenaire-->	
			
			<section id="demo" >
			    <div class="demotext">
                    <h2>We offer Free demo for <br>new Customer</h2>
                    <button type="button">Request a demo</button>
				</div>
			</section><!--demo-->	
		</main>
		
		<footer>
			<div class="recherche">
				<input id="adresseEmail" type="email" value="type your email"/>
				<button type="submit" value="subscribe">subscribe</button>
			</div><!--recherche-->	
			<div class="box">
				<div class="social">
					<img src="../asset/img/logoblack2.png">
					<div class="ico">
						<a href="https://twitter.com/?lang=fr"><span class="fa fa-facebook"></span></a>
			            <a href="https://twitter.com/?lang=fr"><span class="fa fa-twitter"></span></a>
			            <a href="https://twitter.com/?lang=fr"><span class="fa fa-pinterest-p"></span></a>
			            <a href="https://twitter.com/?lang=fr"><span class="fa fa-dribbble"></span></a>
					</div>
				</div><!--social-->	
				<div class="contact">
					<nav>
						<ul>
							<li><a href="#">+8801912704287</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Support Resources</a></li>
							<li><a href="#">About Us</a></li>
						</ul>
					</nav>
				</div><!--contact-->
				<div class="nav2">
					<nav>
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Documentation</a></li>
							<li><a href="#">Community</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
					</nav>
				</div><!--nav2-->
			</div><!--box-->
			<div class="subfooter">Copyright 2017 © <span>2017, Huni</span> All rights reserved.</div>	
		</footer> 
		 
	</body> 
	 
</html>