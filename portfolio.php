<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Portfolio Laura Laisné</title>
			<meta name="Author" content="laura">
			<link rel="stylesheet" href="css/style.css">
			<script src="https://kit.fontawesome.com/975032478f.js" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>

    <body>
    <!--Creation d'une navbar avec bootstrap en position fixe sur toute les sections-->
        <?php include "components/header.php"; ?>

        <main data-bs-spy="scroll" data-bs-target="#nav" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
        <!--creation de la section skills qui regroupe la présentation et les compétences-->
                <div class="flex-column">
                    <h1 class="text-center text-white p-3"> Bienvenue</h1>   
                </div>
            <?php include "components/section_skills.php"; ?>

            <hr class="w-50 m-auto text-white">
            <!--création de la section mes etudes avec une liste déroulantes -->
            <?php include "components/section_etude.php"; ?>

            <hr class="w-50 m-auto text-white">
            <!--création de la section mes réalisations avec 5 images de projet réalisé en tp individuel dont un projet full privée sous forme de caroussel-->
            <?php include "components/section_realisations.php"; ?>

            <hr class="w-50 m-auto text-white">
        <!--creation de la section expériences professionnells avec des background-->
            <?php include "components/section_exp.php"; ?>

            <hr class="w-50 m-auto text-white">

        <!--creation de la section loisirs et outils informatiques avec des image en rond alignement text. Chaque loisirs a son emote version manga kawaii et sa description-->
            <?php include "components/section_loisirs.php"; ?>

            <hr class="w-50 m-auto text-white">

        <!--creation de la section contact avec un formulaire + checkbox-->
            <?php include "components/section_contact.php"; ?>
        </main>

    <!--footer contenant mail telephone, copyright et reseaux sociaux (discord et isntagram)-->
        <?php include "components/footer.php"; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>

        <script>
            function onSubmit(token) {
                document.getElementById("formportfolio").submit();
            }
        </script>

    </body>
</html>