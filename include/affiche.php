 <!--AFFICHE-->
 <?php include('connectbdd.php'); ?>

 <div class="title-dada-affiche">
     <h2>A l'affiche</h2>
 </div>


 <div class="center slider">

     <?php

        $req = $bdd->prepare("SELECT affiche ,id_film FROM film");
        $req->execute();

        while ($donnees = $req->fetch()) { ?>

         <a class="link-poster" href="parasite.php?id=<?php echo $donnees['id_film']; ?>"><img src=<?php echo $donnees['affiche']; ?> alt=""></a>

     <?php } ?>

 </div>