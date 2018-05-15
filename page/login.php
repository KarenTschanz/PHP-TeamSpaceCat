<?php  
 session_start();  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=localhost; dbname=spacecat", 'root', 'root');  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>Il y a un truc qui manque</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM user WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location: login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Mot de passe ou nom incorrect</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> PHP LOG IN</title>  
           <link rel="stylesheet" href="style.css">
      </head>  
      <body> 
        <div class="flex"> 
             <div class="container">  
                  <?php  
                  if(isset($message))  
                  {  
                       echo '<label class="rouge">'.$message.'</label>';  
                  }  
                  ?>  
                  <h3>Admin Huni</h3>
                  <form method="post">  
                       <input type="text" name="username" placeholder="Username" class="form-control" />  
                       <br />  
                       <input type="password" name="password" placeholder="Password" class="form-control" />  
                       <br />  
                       <input type="submit" name="login" class="btn btn-info" value="Login" />  
                  </form>  
            </div>  
        </div>
      </body>  
 </html>