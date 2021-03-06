<! DOCTYPE html>
<?php 
$bdd = new PDO( 'mysql:host=localhost;dbname=articles', 'root', 'root');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id = htmlspecialchars($_GET['id']);
    
    $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $article->execute(array($get_id));
    
    //verifie que il y a bien un article
    if($article->rowCount() == 1){
        $article = $article->fetch();
        $titre = $article['titre'];
        $contenu = $article['contenu'];
    }else{
        die('cet article n existe pas');
    }
}else{
    die('erreur');
}

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
			</section><!--/titlePage-->
				
			<div id="ttAsideCasAside">
                <div class="casAside">
                    <section id="welcome" class="textwelcome">
                        <h3>Introzap feel free contact us, welcome </h3>
                        <p>Tracking customer event data, such as for Kissmetrics’ behavioral analytics solution</p>
                        
                          <div class="lienSocialBlog">
                            <p>5 comments yet</p>
                            <div class="buttonSocial0">
                                <a class="buttonSocial1" href="#"><span class="fa fa-facebook"></span>facebook</a>
                                <a class="buttonSocial2" href="#"><span class="fa fa-twitter"></span>twitter</a>
                            </div>
                        </div>
                    </section><!--/welcome-->
                     
                    <!-- FIN A copier sur les autres pages-->

                    <section id="detailBlog1" class="content">
                         <figure>
                             <figcaption>
                                <h2><?=$titre ?></h2>
                                <p><?= $contenu ?></p>
                             </figcaption>
                             <div class="imgBlogGD"></div>
                         </figure>
                    </section><!--/detailBlog1-->
                    
                    <section id="detailBlogText" class="content">
                        <p>Tracking customer event data, such as for Kissmetrics’ behavioral analytics solution, is an integral part to any successful online business–but I bet you already knew that. You might also know that installing Kissmetrics tracking code across your platform is relatively straight forward, though it can get complex depending on your specific requirements. 
                        The complexity and management overhead of event tracking can rise quickly when every data-capturing tool your team adds requires developers to implement tracking code for every product. It is time consuming and can take up resources. And no big surprise, this can create friction between marketing and engineering. You definitely knew that… cue engineers and marketers nodding their head slowly…</p>
                        <p>You install Segment tracking code once and they’ll collect all customer event data and integrate it with all the top applications and send the data to them accordingly. Segment captures data from every customer touch point and then sends your customer data to the tools where it can be used most effectively. Their goal is to take the step of adding and managing unique snippets with each new tool off the table.</p>
                        <p>First, Understand Behavior</p>
                        <p>You install Segment tracking code once and they’ll collect all customer event data and integrate it with all the top applications and send the data to them accordingly. Segment captures data from every customer touch point and then sends your customer data to the tools where it can be used most effectively. Their goal is to take the step of adding and managing unique snippets with each new tool off the table.</p>
                        <h4>Break down for me what the Dashboard is and what you do for it.</h4>
                        <p>So, it’s a web application that manages your devices and SIM cards on a nice interface.  You can see usage, configure your cloud settings, add tags for organization, pause, resume devices and much more. </p>
                        <blockquote>Thinking about the work culture at Hologram, what is something that you enjoy?</blockquote>
                        <p>So, it’s a web application that manages your devices and SIM cards on a nice interface.  You can see usage, configure your cloud settings, add tags for organization, pause, resume devices and much more.  I really enjoy the team here.  We’re getting a ton of stuff done every day and enjoying it a lot.  The atmosphere is relaxed and everyone has their own responsibilities and I think that’s because we all trust each other.  All together, we have a very wide range of skills which is needed in our company because we have such diverse public offerings, ranging from the lowest level hardware to the highest level web applications.  We have to cover all of it, and we do cover it all.  It’s all very impressive.</p>
                        <h4>Special offer to get started with Segment </h4>
                        <blockquote>’ve heard that you’re self-taught in the field of software development, so tell me what motivated you to study that</blockquote>
                        <p>The challenge has been making sure that all of the features that we design and want to put into our website are managed in such a way that the user has a good experience with them.  This is not easy because we have so much to offer in terms of products, and we’re getting more all the time. The reason I enjoy programming is because I like playing games and I wanted to make my own as a child.  As an adult, I got a degree in ESL and went to China to teach adult business English for two years, and managed a school in China as well for a year and a half. </p>
                    </section><!--/detailBlogText-->
                    
                    <section id="commentAuthor" class="content">
                        <div class="author">
                            <h4>Author</h4>
                            <figure>
                              <div class="avatar"><!--le film était pas mal, joli décor-->
                                   <div class="greyComment"></div>
                                   <p>Asifia Asifia</p>
                               </div><!--/avatar-->
                                <figcaption>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                                </figcaption>
                            </figure>
                        </div><!--/author-->
                        
                        <div class="comment">
                            <h4>Comments (3)</h4>
                            <figure>
                              <div class="avatar"><!--le film était pas mal, joli décor-->
                                   <div class="greyComment"></div>
                                   <p>Asifia Asifia</p>
                               </div><!--/avatar-->
                                <figcaption>
                                    <p>If you are looking to grow your business, get more customers and increase your profits, it's worth taking the time to review how your business is performing now and get </p>
                                    <p class="date">21 feb,2017</p>
                                    <p class="reply">Reply</p>
                                </figcaption>
                            </figure>
                            <figure  class="replypink">
                              <div class="avatar"><!--le film était pas mal, joli décor-->
                                   <div class="greyComment"></div>
                                   <p>Asifia Asifia</p>
                               </div><!--/avatar-->
                                <figcaption>
                                    <p>If you are looking to grow your business, get more customers and increase your profits, it's worth taking the time to review how your business is performing now and get some</p>
                                    <p class="date">21 feb,2017</p>
                                    <p class="reply">Reply</p>
                                </figcaption>
                            </figure>
                            <figure>
                              <div class="avatar"><!--le film était pas mal, joli décor-->
                                   <div class="greyComment"></div>
                                   <p>Asifia Asifia</p>
                               </div><!--/avatar-->
                                <figcaption>
                                    <p>If you are looking to grow your business, get more customers and increase your profits, it's worth taking the time to review how your business is performing now and get some</p>
                                    <p class="date">21 feb,2017</p>
                                    <p class="reply">Reply</p>
                                </figcaption>
                            </figure>
                        </div><!--/author-->
                    </section><!--/comment-->
                    
                    <form class="content">
                        <h4>Leave a Reply</h4>
                        <textarea name="message" rows="10" cols="30"></textarea>
                        <input class="name" type="text" placeholder="Name">
                        <input class="email" type="email" placeholder="Email">
                        <button type="submit" value="Submit">Submit Request</button>
                    </form>
                </div><!--casAside-->
                <aside>
                   <div class="search0">
                        <input class="search" type="search" placeholder="Search">
                        <span class="fa fa-search"></span>
                    </div>
                    <h3>free email updates</h3>
                            <input class="name" type="text" placeholder="Name">
                            <input class="email" type="email" placeholder="Email">
                            <button type="submit" value="Submit">Submit</button>
                    <h3>blog categories</h3>
                    <ul>
                        <li>Mobile App(07)</li>
                        <li>Mobile App(07)</li>
                        <li>Mobile App(07)</li>
                        <li>Mobile App(07)</li>
                        <li>Mobile App(07)</li>
                        <li>Mobile App(07)</li>
                        <li>Mobile App(07)</li>
                    </ul>
                </aside>
			</div><!--ttAsideCasAside-->
			
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
			
			
			<!--A copier sur les autres pages-->	
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