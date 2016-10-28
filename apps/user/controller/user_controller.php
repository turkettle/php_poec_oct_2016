<?php

    var_dump($_POST);

    if (!empty($_POST)) {

        switch ($_POST['op']) {

          // Création de compte utilisateur.
          case 'create':

            if (user_exists($_POST['email'], $_POST['pwd'])) {
                // TODO: Message d'erreur.
                header('Location: ../user_form.php?app=user');
            }

            if ($_POST['pwd'] == $_POST['pwdconf']) {
                if (create_user($_POST['email'], $_POST['pwd'])) {
                    // TODO: message de crétion de compte.
                }
                else {
                    // TODO: message d'erreur.
                }
                header('Location: ../user_form.php?app=user');
            }
            // TODO: Message d'erreur.

            header('Location: ../user_form.php?app=user');
            break;

          // Connexion utilisateur.
          case 'login':

            if (user_exists($_POST['email'], $_POST['pwd'])) {
              // TODO: message de confirmation de login.
            }
            else {
              // TODO: message de mauvais ID.
            }
            header('Location: ../../../index.php');
            break;

          default:
            break;
        }
    }

    function user_exists($email, $pwd) {

        include('../../../db.php');

        $query = $db->prepare('SELECT * FROM user WHERE email=:email AND pwd=:pwd');
        $query->bindValue(':email', $email);
        $query->bindValue(':pwd', $pwd);
        $execute = $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
          return FALSE;
        }
        return TRUE;
    }

    function create_user($email, $pwd) {

        include('../../../db.php');

        $query = $db->prepare('INSERT INTO user (email, pwd) VALUES (:email, :pwd)');
        $query->bindValue(':email', $email);
        $query->bindValue(':pwd', $pwd);
        $execute = $query->execute();
        return $execute;
    }

 ?>
