 <?php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
    header("location: login.php");
     exit();
 }  
 else  
 {  
//CONNEXION A LA BASE DE DONNEE
    $bdd = new PDO( 'mysql:host=localhost;dbname=articles', 'root', 'root');
    
    $mode_edition = 0;
    //traitement de la modification
    //empty verifie qu'il y a bien quelque chose
    //htmlspecialchars securise
    if(isset($_GET['edit']) AND !empty($_GET['edit'])){
        $mode_edition = 1;
        $edit_id = htmlspecialchars($_GET['edit']);
        $edit_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $edit_article->execute(array($edit_id));
        
        //verifie que l'article existe bien
        if($edit_article->rowCount() == 1){
            //recuperation de l'article
            $edit_article = $edit_article->fetch();
        }else{
            // \ permet de prendre l'appostrophe en string
            die('Erreur: \'article concerné n\'existe pas');
        }
    }else{
        
    }

    //recuperation donnée article
    if(isset($_POST['article_titre'], $_POST['article_contenu'])){
        if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])){
            $article_titre = htmlspecialchars($_POST['article_titre']);
            $article_contenu = htmlspecialchars($_POST['article_contenu']);
            
            if($mode_edition == 0){
                
                var_dump($_FILES);
                //Pour se fier que ou jpg (refuser les png etc..)
                var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
                
                
                //insertion des données dans la table article
                // NOW récupère automatiquement la date actuelle
                $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_publication) VALUES (?, ?, NOW())');
                $ins->execute(array($article_titre, $article_contenu));
                //recuperation du derniere id
                $lastid = $bdd->lastInsertId();
                
                
                //Pas obligatoire la miniature
                if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name'])) {
                //tmp_name nous retoune un 2 ce qui correspond a jpg (regarder tableau image type)
                    if(exif_imagetype($_FILES['miniature']['tmp_name']) == 2) {
                    $chemin = 'miniatures/'.$lastid.'.jpg';
                    //deplacer un fichier télécharger
                    move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
                } else {
                    $message = 'Votre image doit être au format jpg';
                    }
                }
                $message = 'Votre article a bien été posté';
                
            }else{
                //mise a jour de donnée dans la bdd
                $update = $bdd->prepare('UPDATE articles SET titre = ?, contenu = ?, date_time_edition = NOW() WHERE id = ?');
                $update->execute(array($article_titre, $article_contenu, $edit_id));
                //redirection direct vers l'article
                // ATTENTION !! a ne pas mettre d'espace apres Location
                header('Location: http://localhost:8888/PHP-git/PHP-TeamSpaceCat/page/blog_detail.php?id='.$edit_id);
                $message = 'votre article a bien été mise a jour';
            }
        }else{
            $message = 'Veuillez remplir tous les champs';
        }
    }
?>


    <!doctype html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Redaction / edition</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <style>
        body {
            background: #c62650;
            padding: 5% 10%;
        }

        h1,
        h2 {
            color: white;
        }

        h1 {
            margin-bottom: 5%;
        }

        h2 {
            margin-bottom: 2%;
        }

        input,
        textarea {
            padding: 5px;
            color: #c62650;
            margin-bottom: 20px;
            width: 40%;
        }

        .input-group {
            width: 40%;
        }

        .btn,
        .input-group-text,
        .custom-file-label::after {
            background: transparent;
            color: white;
            border: 1px solid white;
        }

        .btn {
            margin-top: 30px;
        }

        .btn:hover {
            background: white;
            color: #c62650;
            border: 1px solid white;
        }

        img {
            vertical-align: middle;
            border-style: none;
            width: 25%;
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        figure{display: flex;color: white;}

    </style>


    <body>
        <!-- le enctype permet de ne pas envoyer que du texte -->
        <figure>
        <img src="../asset/spaceCat.png" alt="">
        <figcaption>
            <p>Team SpaceCat prête<br> pour la mission !</p>
        </figcaption>
        </figure>
        
        <a href="logout.php">logout</a>
        <h1>Administation</h1>
        <h2>Gestion des articles</h2>
        <form method="POST" enctype="multipart/form-data">
            <input class="titreArticle" type="text" name="article_titre" placeholder="titre" <?php if($mode_edition==1 ){ ?>value="
            <?= $edit_article['titre'] ?>"
                <?php } ?>/><br>
                <textarea name="article_contenu" placeholder="contenu de l'article"><?php if($mode_edition == 1){ ?><?= $edit_article['contenu'] ?><?php } ?></textarea>
                <?php if($mode_edition == 0){ ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="miniature" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <?php } ?>
                <button type="submit" value="envoyer l'article" class="btn">envoyer l'article</button>
        </form>
        <br>
        <?php if(isset($message)){echo $message;} ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>

    </html> 
  <?php
 }  
 ?>  
