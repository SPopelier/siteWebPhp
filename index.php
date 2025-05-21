<!--index.php-->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
if ($page === 'accueil') {
    include 'index.php';
    }elseif ($page === 'hobby') {
    include 'hobby.php';
    }elseif ($page === 'contact') {
    include 'contact.php';
    } else {
 "<h1>404 Page non trouvée</h1>";
}
?>

<?php
$page_title = "accueil";
$page_description = "Page Accueil";
?>


<?php include('header.php'); ?>
<body>

    <h2>Bienvenue sur mon site !</h2>


        <div id="presentation">
            <img src="img-droite-header.jpg" alt="Sarah Popelier" id="photo-sarah">
        <div id="texte-presentation">
            <h1 id="title-name">POPELIER Sarah</h1>
            <h2>Parcours dévelopeur</h2>
        </div>
    </div>

    <div>
        <aside>
            <section class="profil">
                <h3>Profil</h3>
                <p>Passionnée par le développement
                    et les nouvelles technologies, je
                    suis en début de parcours dans ce
                    domaine avec une motivation sans
                    faille pour apprendre et progresser.
                    Bien que novice, j'ai déjà commencé à
                    explorer les bases du HTML, CSS à
                    travers un projet personnel. <span class="fontweight"> Curieuse
                        et déterminée</span>, je suis prête à relever
                    les défis pour acquérir des
                    compétences solides. Cette formation
                    représente pour moi une opportunité
                    idéale pour structurer mes
                    connaissances et devenir une
                    développeuse capable de créer
                    des solutions efficaces et innovantes.
                </p>
            </section>

            <section class="liste-sans-puce profil">
                <h3>Compétences</h3>
                <ul class="no-puce fontstyleitalic">
                    <li>Sens de l'organisation</li>
                    <li>Travail en équipe</li>
                    <li>Adaptabilité au changement</li>
                    <li>Écoute active</li>
                    <li>Gestion du temps efficace</li>
                    <li>Persévérance dans les projets</li>
                    <li>Esprit critique</li>
                    <li>Résolution créative de problèmes</li>
                </ul>
            </section>
    

    <?php include 'footer.php'; ?> 
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
