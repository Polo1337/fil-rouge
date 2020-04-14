<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crud Cinema - Correction</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>




    <!--

Partie Cinéma !

 -->
    <div class="container">
        <form id="contact" action="traitement/insert-cinema.php" method="post">
            <h3>
                <center>Form - Film Insertion</center>
            </h3>
            <fieldset>
                <input placeholder="Titre du film" name="titre" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Durée du film" name="duree" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Date de sortie du film" name="date_de_sortie" type="text" tabindex="3" required>
            </fieldset>
            <fieldset>
                <input placeholder="Acteur a l'affiche" name="affiche" type="text" tabindex="4" required>
            </fieldset>
            <fieldset>
                <input placeholder="BA" name="bande_annonce" type="text" tabindex="5" required>
            </fieldset>
            <fieldset>
                <input placeholder="Note du film" name="note" type="text" tabindex="5" required>
            </fieldset>
            <fieldset>
                <input placeholder="synopsis" name="synopsis" type="text" tabindex="5" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
    </div>
    <!--

Partie salle !

-->

    <div class="container">
        <form id="contact" action="traitement/insert-salle.php" method="post">
            <h3>
                <center>Form - Cinéma Insertion Salle</center>
            </h3>
            <h4>
                <center>Exercice d'utilisation CRUD, Ajout dans une table simple, avec élément récupéré d'une autre table</center>
            </h4>
            <fieldset>
                <input placeholder="Numero de la Salle" name="numero_salle" type="text" tabindex="6" required>
            </fieldset>
            <fieldset>
                <input placeholder="Capacité de la salle" name="capacite_salle" type="text" tabindex="7" required>
            </fieldset>
            <fieldset>
                <select name="id_cinema" tabindex="8" require>
                    <?php
                    include('include/connectBDD.php');

                    $req = $bdd->prepare(" SELECT id_cinema, nom_cinema FROM cinema ");
                    $req->execute();

                    while ($donnees = $req->fetch()) { ?>

                        <option value="<?= $donnees['id_cinema']; ?>"> Nom du Cinéma : <?= $donnees['nom_cinema']; ?> | id du cinéma : <?= $donnees['id_cinema']; ?> </option>


                    <?php  }

                    ?>





                </select>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
    </div>




    <!--

Partie Équipement afiliation !


 -->




    <div class="container">
        <form id="contact" action="traitement/insert-equipement.php" method="post">
            <h3>
                <center>Ajouter Équipement</center>
            </h3>
            <h4>
                <center>Exercice d'utilisation CRUD, ajout dans une table simple</center>
            </h4>
            <fieldset>
                <input placeholder="Nom de L'équipement" name="nom_equipement" type="text" tabindex="8" required autofocus>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
    </div>

    <!--

    Partie Équipement afiliation !


     -->


    <div class="container">
        <form id="contact" action="traitement/insert-relation.php" method="post">
            <h3>
                <center>Table de Relation</center>
            </h3>
            <h4>
                <center>Ajout dans table de relation</center>
            </h4>
            <fieldset>
                <select name="id_cinema" tabindex="8" required>

                    <?php

                    // REQUETE PERMETTANT LA RECHERCHE DES CINEMAS
                    $req = $bdd->prepare("SELECT id_salle,numero_salle,id_cinema FROM salle");
                    $req->execute();
                    //Boucle pour afficher tout les résultats
                    while ($donnees = $req->fetch()) {
                    ?>
                        <option value="<?= $donnees['id_salle']; ?>"> Salle n°<?= $donnees['numero_salle']; ?> , Cinema N° <?= $donnees['id_cinema']; ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </fieldset>

            <fieldset>
                <?php
                $req = $bdd->prepare("SELECT id_equipement, nom_equipement FROM equipement");
                $req->execute();
                while ($donnees = $req->fetch()) {
                ?>

                    <input type="checkbox" id="id_equipement[]" name="<?php echo $donnees['id_equipement'] ?>" value="<?php echo $donnees['id_equipement'] ?>">
                    <label for="<?php echo $donnees['id_equipement'] ?>"> <?php echo $donnees['nom_equipement'] ?></label><br>

                <?php } ?>

            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
        </form>
    </div>













</body>

</html>