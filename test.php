<form action="ajout.php" method="post">
    <input type="text" name="nom">
    <input type="text" name="login">
    <input type="text" name="mdp">
    <input type="submit" name="ajouter">
</form>

<?php 
 $passHash = password_hash("toto",PASSWORD_BCRYPT);
 echo $passHash;
 if(password_verify("ezrzr",$passHash)){
     echo "<br>ok";
 }else{
     echo "non ok";
 }