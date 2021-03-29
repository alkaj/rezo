
<?php
require 'Models/User.php';
// afficher le formulaire d'incription
echo '<form action="#" method="POST"><input type="email" placeholder="Votre email..." name="email" /><br /><input name="pass" type="password" placeholder="Veuillez choisir un mot de passe" /><br /><input type="submit" value="Signup" /></form>';

// verifier le formulaire
if(!empty($_POST['email']) && !empty($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // verifier email valide
    // verifier mot de passe valide
    // enregistrer
    $user = new User();
    $result = $user->signup($email, $pass);
    echo $result?$result:'0';
}

?>