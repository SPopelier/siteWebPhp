<!--index.php-->
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'index';
if ($page === 'index') {
    include 'index.php';
    }elseif ($page === 'hobby.php') {
    include 'hobby.php';
    }elseif ($page === 'contact.php') {
    include 'contact.php';
    } else {
echo "<h1>404 Page non trouvée</h1>";
}
?>

<?php include('header.php'); ?>
<body>

    <h1>Bienvenue sur mon site !</h1>

    <section class="profil">
        <div>
            <h1 class="bg-dark ">POPELIER Sarah</h1>
            <h2 class="bg-dark">Parcours dévelopeur</h2>
        </div>
    </section>

    <div class="content">
        <aside>
            <section>
                <h3 class="bg-dark bordered">Profil</h3>
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

            <section>
                <h3 class="bg-dark bordered">Compétences</h3>
                <ul class="fontstyleitalic">
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
    <script src="js/script.js"></script>
</body>
</html> 