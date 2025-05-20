<!--contact.php-->

<body>

<?php 
include('header.php');
?>

<div>
            <p>Contactez moi</p>

        <form class="formulaire bordered" action="https://httpbin.org/post" method="post">

            <label for="statut">Quel est votre statut ?:</label>
            <select name="statut" id="statut">
                <option value="">--S'il vous plait choisissez une option--</option>
                <option value="pro">Professionnel</option>
                <option value="particulier">Particulier</option>
            </select>
            <br><br>


            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <br><br>

            <label for="phone">Numéro de téléphone :</label>
            <input type="tel" id="phone" name="phone" pattern="^\+33\d{9}$" required value="+33">

            <!-- Exemple de label et input pour email -->
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
            <br><br>

            <!-- Exemple de label et textarea -->
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>
            <br><br>

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
include('footer.php');