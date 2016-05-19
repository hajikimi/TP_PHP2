<?php
define('PSESS_USERNAME', 'username');
$login_message = ''; // Message à afficher en cas de bonne ou de mauvaise connexion
$user_is_loggedIn = false; // Indique que l'utilisateur est connecté ou ne l'est pas
$username = null; // Valeur du username
$password = null; // Valeur du password

session_start(); // Ne plus le mettre ailleurs si le script courant est sur toutes les pages
// L'utilisateur est-il en train de se connecter ?
if (array_key_exists('connect', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST))
{
    // L'utilisateur cherche à se connecter ....
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    require_once('_authenticate.php'); // Appel du script qui gère l'authentification
    if (authenticate($username, $password)) {
        // L'utilisateur est authentifié
        $_SESSION[PSESS_USERNAME] = $username;
        $user_is_loggedIn = true;
        $login_message = "Bonjour $username";
    } else {
        $login_message = 'L\'identificateur et le mot de passe fournis ne concordent pas.';
    }
}
elseif (array_key_exists('disconnect', $_POST)) {
    // L'utilisateur cherche à se déconnecter ....
    unset($_SESSION[PSESS_USERNAME]); // Supprimer la variable 'username' de la session
    $user_is_loggedIn = false;
} else { // Cas du GET
    $user_is_loggedIn = array_key_exists(PSESS_USERNAME, $_SESSION);
    if ($user_is_loggedIn) {
        $username = $_SESSION[PSESS_USERNAME];
        $login_message = "Bonjour $username";
    }
}


?>
<!DOCTYPE html>
<html>

<head lang="en">

    <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <title>Index</title>

</head>
<body>
<div id="header">
    <img id="logo" src="../media/logo/VIN.png"/>
    <div class="menu">
        <ul id="ul_menu">
            <li class="li_menu"> <a href="index.php" class="a_menu" >Accueil</a></li>

            <li class="li_menu" ><a href="galerie.php" class="a_menu" >Galerie</a></li>
            <li class="li_menu"><a href="catalogue.php" class="a_menu">Catalogue</a></li>
            <li class="li_menu" ><a href="panier.php" class="a_menu" >Panier</a></li>
            <li class="li_menu" ><a href="cantact.php" class="a_menu" >Cantact</a></li>
            <div id="login_logout_form">
                
                <?php if ($user_is_loggedIn) { ?>
                    <form method="post">
                        <input class='bouton' type="submit" name="disconnect" id="se_deconnecter" value="Logout"/>
                    </form>
                <?php } else { ?>
                    <form method="post">
                        <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : ''; ?>"/><br>
                        <input type="password" name="password" id="password" value="<?php echo isset($password) ? $password : ''; ?>"/><br>
                        <input class='bouton'type="submit" name="connect" id="se_connecter" value="Login" />
                    </form>
                <?php } ?>
            </div>
        </ul>
    </div>
</div>