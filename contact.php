<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Alban Mary | Contact</title>
</head>
<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']) AND !empty($_POST['prenom']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"VOTRE NOM"<email-expediteur@example.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Prenom de l\'expéditeur :</u>'.$_POST['prenom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                    <u>Adresse Ip de l\'éxpediteur:</u>'.$_SERVER['REMOTE_ADDR'].'<br />
                    <u>Navigateur de l\'éxpediteur:</u>'.$_SERVER['HTTP_USER_AGENT'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("contact@albanmary.fr", "CONTACT - contact@albanmary.fr", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<body>
<header>
    <div class="navbar">
        <div class="navbar-gauche">
            <a href="easter-egg.html">Alban Mary</a>
        </div>
        <div class="navbar-centre">
            <div class="navbar-ligne">
                <a href="index.html">Accueil</a>
                <a href="competences.html">Compétences</a>
                <a href="projets.html">Projets</a>
            </div>
            <div class="burger">
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa-solid fa-bars fa-xl"></i></button>
                    <div class="dropdown-content">
                        <a href="index.html">Accueil</a>
                        <a href="competences.html">Compétences</a>
                        <a href="projets.html">Projets</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-droite">
            <a class="droite" href="contact.php"><i class="fa-solid fa-envelope"></i>‎ Contact</a>
        </div>
    </div>
</header>
<main>
    <div class="formulaire">
	<div class="formulaire-gauche">
		<h2>Contactez <span>moi</span> !</h2>
		<p>N'hésitez pas à me contacter pour tout renseignement.
		Nous étudierons ensemble la meilleure formule pour votre projet.</p>
		<form method="POST" action="">
			<input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<input type="text" name="prenom" placeholder="Votre prÃ©nom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>" /><br /><br />
			<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
			if(isset($msg))
			{
			echo $msg;
			}
			?>
        	</div>
	<div class="formulaire-droite">
        	</div>

   </div>
</main>
<footer> 
    <div class="haut">
        <div class="categorie">
            <div class="icon">
                <i class="fa-solid fa-phone fa-4x"></i>
            </div>
            <div class="info">
                <div class="titre">
                    <h2>Téléphone</h2>
                </div>
                <div class="text">
                    <p>0750049613</p>
                </div>
            </div>
        </div>
        <div class="separation"><i class="fa-solid fa-grip-lines-vertical fa-6x"></i></div>
        <div class="categorie">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-location-dot fa-4x"></i>
            </div>
            <div class="info">
                <div class="titre">
                    <h2>Adresse</h2>
                </div>
                <div class="text">
                    <p>22 rue Félix Thomas, Nantes</p>
                </div>
            </div>
        </div>
        <div class="separation"><i class="fa-solid fa-grip-lines-vertical fa-6x"></i></div>
        <div class="categorie">
            <div class="icon">
                <i class="fa-solid fa-envelope fa-4x"></i>
            </div>
            <div class="info">
                <div class="titre">
                    <h2>Email</h2>
                </div>
                <div class="text">
                    <a href="contact.php"><p>contact@albanmary.fr</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="centre">
        <div class="reseaux">
            <a class="reseau" href="https://github.com/kidoly"><i class="fa-brands fa-github fa-2x"></i></a>
            <a class="reseau" href="https://www.linkedin.com/in/alban-mary-600766251/"><i class="fa-brands fa-linkedin fa-2x"></i></a>
            <a class="reseau" href="https://www.instagram.com/_alban.mary_/?hl=fr"><i class="fa-brands fa-instagram fa-2x"></i></a>
        </div>
    </div>
    <div class="bas">
        <a href="mentions-legales.html">Mentions légales</a>
        <p>Tous droits pas réservés ©</p>
        <a href="droit-dauteur.html">Droit d'auteur</a>
    </div>
</footer>
</body>
</html>