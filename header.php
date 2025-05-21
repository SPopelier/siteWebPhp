<!--header.php-->
<?php
$page_title = "header";
$page_description = "Page pour mon header";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site Web</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
<header>
    <div class="header-container">

    <nav class="nav-left">
        <ul>
            <li><a href="index.php?page=index">Accueil</a></li>
            <li><a href="hobby.php?page=hobby">Mes hobbies</a></li>
            <li><a href="contact.php?page=contact">Contact</a></li>
        </ul>
    </nav>

        <h1>Popelier Sarah site Web</h1>

        <div class="logo-right">
            <img src="logoPS.png" alt="Logo"/>
        </div>
    </div>
</header>

<!--ou-->


<!--
$page_title = "Header";
$page_description = "Page pour mon header.";

echo '<header>';
echo '<h1>Site de Sarah Popelier</h1>';
echo '<nav>';
echo '<a href="index.php">Accueil</a>';
echo '<a href="hobby.php">Hobbies</a>';
echo '<a href="contact.php">Contact</a>';
echo '</nav>';
echo '</header>';
-->




