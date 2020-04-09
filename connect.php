<?php
session_start();
if (!(isset($_POST['LOGIN']))) {
    //On récupère les valeurs entrées par l'utilisateur :
    $user = htmlspecialchars($_POST['username']);
    $mdp = htmlspecialchars(hash("Whirlpool", $_POST['password_user'])); // hash = Génère une valeur de hachage (empreinte numérique)
    $mail = htmlspecialchars($_POST['mail_user']);
    $mail = strtolower($mail);
    //On construit la date d'aujourd'hui
    //strictement comme sql la construit0
    //$today = date("y-m-d");
    //On se connecte
    function log_user($user, $mdp, $mail)
    {
        //$DB_NAME = "dbs296631"; //database_name
        //$DB_DSN = "mysql:host=db5000303644.hosting-data.io;dbname=" . $DB_NAME; //database_datasourcename
        //$DB_USER = "dbu526586"; //database_user
        //$DB_PASSWORD = "u:Z2H^7n"; //database_mot_de_passe
        $DB_NAME = "allo_simplon"; //database_name dbs296631
        //$DB_DSN = "mysql:127.0.0.1:3308;dbname=" . $DB_NAME; //database_datasourcename LOCAL
        $DB_DSN = "mysql:127.0.0.1:3308;dbname=" . $DB_NAME; //database_datasourcename "mysql:host=db5000303644.hosting-data.io;dbname=" . $DB_NAME;
        $DB_USER = "root"; //database_user dbu526586
        $DB_PASSWORD = ""; //database_mot_de_passe u:Z2H^7n
        try {
            $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure un attribut PDO
            $query = $bdd->prepare("SELECT * FROM users WHERE (user=:user OR mail=:mail) AND mdp=:mdp"); // verifie que les données rentrées sont bonnes par rapport a la bdd 
            $query->execute(array(':user' => $user, ':mail' => $mail, ':mdp' => $mdp)); // Exécute une requête préparée
            $val = $query->fetch();
            if ($val == null) {
                $query->closeCursor();
                return (-1);
            }
            $query->closeCursor();
            return ($val);
        } catch (PDOException $e) {
        }
    }
    if (($val = log_user($user, $mdp, $mail)) == -1) {
        echo "User not found";
    } else {
        $_SESSION['user'] = $val['user'];
        header("Location: index.php");
    }
}
