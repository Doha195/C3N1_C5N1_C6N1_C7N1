
<?php
if(!empty($_POST)) {
 $name = $_POST["name"];
 $pass = $_POST["password"];
if (isset($name,$pass)) {
  

 $conn = new mysqli("localhost", "root","","login");
 // Check connection
 if (!$conn) {
 die("Connection failed: " . connect_error($conn));
 }
}
//  else{
//      echo "Connected successfully";
//  }


 $query = "SELECT * FROM user WHERE name = '$name'";
 
  $result= mysqli_query($conn,$query);
  if (!$result) {
    die("Connection failed: " . connect_error($conn));
    }
    // else{
    //     echo "Connected successfully";
    // }
    while( $row = mysqli_fetch_assoc($result) ){
      $db_name=  $row['name'];
      $db_pass =  $row['password'];
    }
    if ($db_name == $name &&  $db_pass ==$pass) {
       header("location: home.php");
    }
    else if ($db_name !== $name &&  $db_pass !==$pass) {
        header("location: index.php");
     }

}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snippets</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="contunu">
            <h1>connexion</h1>
            <div >
                <p>Nom d'utilisateur</p>
                <input class="name" name="name" type="text" placeholder="Entrer le nom d'utilisateur" required>
            </div>
            <div >
                <p>Mot de passe</p>
                <input class="password" name="password" type="password" placeholder="Entrer le mot de passe" required>
            </div>
            <button class="button" type="submit" value="Envoyer" >LOGIN</button>
        </div>
        </from>

        </body>
    </html>

