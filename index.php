<!DOCTYPE html>
<html lang="en">


  <?php include("includes/_head.php"); ?>


<body>
    <header class="bg-success text-white text-center py-4">
        <div class="container">
            <div class="content">
                <div class="col-md-4">
                    <img src="Assets/Picture/phot.jpg" alt="Photo de Doumec Alexander"
                        class="img-fluid rounded-circle mb-3">
                </div>
                <div class="content">
                    <div class="subtitle">
                        <h1>Doumec Alexander</h1>
                        <p class="lead">Technicien Support Informatique</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <section id="informations" class="mb-5">
            <h2 class="h3">Informations</h2>
            <ul class="list-unstyled">
                <li><strong>Permis:</strong> B</li>
                <li><strong>Téléphone:</strong> 07 66 84 53 84</li>
                <li><strong>Email:</strong> alexander.doumec@laplateforme.io</li>
                <li><strong>GitHub:</strong> <a href="https://github.com/alexander-doumec"
                        target="_blank">alexander-doumec</a></li>
                <li><strong>Localisation:</strong> Marseille, France</li>
            </ul>
        </section>

        <section id="experiences" class="mb-5">
            <h2 class="h3">Expériences Professionnelles</h2>
            <div class="mb-3">
                <h3 class="h5">La Plateforme</h3>
                <p class="text-muted">Juillet 2020 - Juillet 2021, Marseille</p>
                <ul>
                    <li>Assemblage et démontage d'ordinateurs</li>
                    <li>Programmation en HTML/CSS</li>
                    <li>Programmation avec Python (POO)</li>
                    <li>Configuration serveur FTP/DNS/DHCP</li>

                </ul>

            </div>

        </section>

        <section id="formations" class="mb-5">
            <h2 class="h3">Formations</h2>
            <div class="mb-3">
                <h3 class="h5">Bachelor IT - La Plateforme</h3>
                <p class="text-muted">Septembre 2023 - Présent, Marseille</p>
                <p>Pédagogie par projet sur la résolution de problématiques concrètes en autonomie.</p>
            </div>
            <div class="mb-3">
                <h3 class="h5">Developpeur web Flutter</h3>
                <p class="text-muted">Juillet 2020 - Juillet 2021, Marseille</p>
                <p>Formations à distance, utilisation de framework pour le developpement d'application mobiles et web</p>


                <div class="mb-3">
                    <h3 class="h5">Lycée Lyautey de Casablanca</h3>
                    <p class="text-muted">Septembre 2017 à Juillet 2018, Casablanca, Maroc</p>
                    <p>Baccaleauréat Science et Technologie du Management, spécialité Ressources Humaines et Communication</p>
                </div>

            </div>

        </section>

        <section id="atouts" class="mb-5">
            <h2 class="h3">Atouts</h2>
            <ul class="list-unstyled">
                <li>Réactif</li>
                <li>Autonome</li>
                <li>Gestion du stress</li>
                <li>Fiable</li>
                <li>Bonne adaptabilité</li>
            </ul>
        </section>

        <section id="langues" class="mb-5">
            <h2 class="h3">Langues</h2>
            <ul class="list-unstyled">
                <li>Anglais: Courant</li>
                <li>Espagnol: Débutant</li>
                <li>Arabe: Courant</li>
            </ul>
        </section>

        <section id="loisirs" class="mb-5">
            <h2 class="h3">Loisirs</h2>
            <ul class="list-unstyled">
                <li>Rugby</li>
                <li>Chasse sous-marine</li>
                <li>Musculation</li>
                <li>Randonnées</li>
            </ul>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <button onclick="window.print()" class="btn btn-primary"> Imprimer le CV</button>
            <?php include("includes/_footer.php"); ?>
        </div>
    </footer>

</body>