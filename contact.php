<!--contact.php-->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

session_start();

$page_title = "contact";
$page_description = "Page Contact";

$errors = []; // pour stocker les erreurs
$success = false; // pour savoir si tout s'est bien passé true ou false
$civility = $lastname = $firstname = $email = $services = $message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") { //exécute le bloc seulement si le formulaire a été envoyé
    //RÉCUPÉRATION DES DONNÉES
    $civility = isset($_POST["civility"]) ? $_POST["civility"] : ''; //récupère selon l'option sélectionnée
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : ''; //récupère le nom
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : ''; //récupère le prénom
    $email = isset($_POST["email"]) ? $_POST["email"] : ''; // récupère l'email
    $services = isset($_POST["services"]) ? $_POST["services"] : ''; //selon le bouton radio coché
    $message = isset($_POST["message"]) ? $_POST["message"] : ''; //récupère le message

    //VÉRIFICATIONS
    if (!in_array($civility, ['Mr', 'Mme', 'Mlle'])) { // in_array vérifie si une valeur existe dans le tableau
        $errors['civility'] = "Choisissez une valeur de civilité valide";
    }
    if (empty($lastname)) { //emtpy teste si le champ est vide
        $errors['lastname'] = "Veuillez entrer votre nom";
    }
    if (empty($firstname)) { //emtpy teste si le champ est vide
        $errors['firstname'] = "Veuillez entrer votre prenom";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //filter_var vérifie la validité d'un email
        $errors['email'] = "Veuillez entrer une adresse email valide";
    }
    if (!in_array($services, ['siteWeb', 'appli', 'logiciel'])) { // in_array vérifie si une valeur existe dans le tableau
        $errors['services'] = "Choisissez un service";
    }
    if (strlen($message) < 5) $errors['message'] = "Veuillez écrire un contenu d’au moins 5 lettres.";
    }
    if (!empty($errors)) {
        $_SESSION['form_data'] = $_POST; //si erreur enregistre les données
    }

    if(empty($errors)) { // si tout est bon
        $success = true;

        $data = [
            'Civilité' => $civility,
            'Nom' => $lastname,
            'Prenom' => $firstname,
            'Email' => $email,
            'Services' => $services,
            'Message' => $message,
            'Date' => date('d-m-Y')
        ];

        $line = implode(' | ', $data) . "\n";
        file_put_contents('formulaire.txt', $line, FILE_APPEND);
}
?>

<body>

<?php 
include('header.php');
?>

<div>
            <p>Contactez moi</p>

        <form class="formulaire" action="index.php?page=contact" method="post">

            <!-- Exemple de label <select> pour : Un champ civilité -->
            <label for="civility">Civilité :</label>
            <select id="civility" name="civility" required>
                <option value="Mr">Monsieur</option>
                <option value="Mme">Madame</option>
                <option value="Mlle">Mademoiselle</option>
            </select>

            <!-- Exemple de label et <input> pour : Nom -->
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname">
            <?php if (!empty($errors['lastname'])): ?>
            <div class="error-box"><?= $errors['lastname'] ?></div>
            <?php endif; ?>

            <!-- Exemple de label et <input> pour : Prénom -->
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname">
            <?php if (!empty($errors['firstname'])): ?>
                <div class="error-box"><?= $errors['firstname'] ?></div>
            <?php endif; ?>

            <!-- Exemple de label et <input> pour : email -->
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email">
            <?php if (!empty($errors['email'])): ?>
                <div class="error-box"><?= $errors['email'] ?></div>
            <?php endif; ?>


            <!--<input type=”radio”> pour : des groupes d'options -->
            <fieldset>
                <legend>Vous avez besoin de mes services pour :</legend>

                <div>
                    <input type="radio" id="siteWeb" name="siteWeb" value="siteWeb" checked />
                    <label for="siteWeb">Un site Web</label>
                </div>

                <div>
                    <input type="radio" id="appli" name="appli" value="appli" />
                    <label for="appli">Une application</label>
                </div>

                <div>
                    <input type="radio" id="logiciel" name="logiciel" value="logiciel" />
                    <label for="logiciel">Un logiciel</label>
                </div>
            </fieldset>



            <!-- Exemple de label et <textarea> pour : écrire un message-->
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>


            <div class="radio">

                <p>Vous préferez être contacté par ?</p>
                <input type="radio" id="choicemail" name="contact_method" value="email" checked>
                <label for="choicemail">Par email</label>

                <input type="radio" id="choicephone" name="contact_method" value="phone">
                <label for="choicephone">Par téléphone</label>
            </div>

            <div class="button">
                <input type="submit" value="Envoyer">
            </div>
        </form>

    </div>

    <div>
                <ul>
                    <li>
                        <a href="">
                            <span><svg viewBox="0 0 512 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    role="img" width="24px" height="18px">
                                    <title>Mon email</title>
                                    <path
                                        d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                    </path>
                                </svg></span>
                            <span>popsupmarketing@gmail.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg viewBox="0 0 320 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg" role="img"
                                width="24px" height="18px">
                                <title>Téléphone de Pops Up Marketing</title>
                                <path
                                    d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                                </path>
                            </svg>
                            <span>06.51.97.05.51</span>
                        </a>
                    </li>

                </ul>

            </div>

<?php
include('footer.php'); ?>

<?php unset($_SESSION['form_data']); ?>
