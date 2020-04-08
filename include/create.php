<?php
        if (!(isset ($_POST['INSCRIPTION']))){
            //On récupère les valeurs entrées par l'utilisateur :
            $user=htmlspecialchars($_POST['username']);
            $mdp=htmlspecialchars(hash("Whirlpool",$_POST['password_user'])); // hash = Génère une valeur de hachage (empreinte numérique)
            $mail=htmlspecialchars($_POST['mail_user']);
            //On construit la date d'aujourd'hui
            //strictement comme sql la construit0
            //$today = date("y-m-d");
            //On se connecte
            echo 'niquebientamere';
            $DB_NAME = "VOD"; //database_name
            $DB_DSN = "db5000303644.hosting-data.io;dbname=".$DB_NAME; //database_datasourcename
            $DB_USER = "dbu526586"; //database_user
            $DB_PASSWORD = "u:Z2H^7n"; //database_mot_de_passe
            try {
                $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure un attribut PDO
                $query= $bdd->prepare("SELECT username FROM VOD WHERE username=:user"); // verifie que les données rentrées sont bonnes par rapport a la bdd 
                echo 'niquebientamere';
                $query->execute(array(':pseudo' => $pseudo, ':mot_de_passe' => $motdepasse, ':description' => $description)); // Exécute une requête préparée
                $query->closeCursor(); // Ferme le curseur, permettant à query d'être de nouveau exécuté

                $query= $bdd->prepare("INSERT INTO user (pseudo, mot_de_passe, description) VALUES (:pseudo, :mot_de_passe, :description)"); // inserer des valeurs dans la base
                $query->execute(array(':pseudo' => $pseudo, ':mot_de_passe' => $motdepasse, ':description' => $description)); // Exécute une requête préparée
            echo 'Create success !';
            return (0);
        } catch (PDOException $e) {
    }
}
?>