<?php

	class UserController {

		function Login() {
			if (isset($_POST['getNomUser'])) {

				//Avant tout, on check les pass..
				include_once('../Model/UserModel.php');
				$var = getUser($_POST['getNomUser']);

				if ($var != null) {

					//TODO : Cryptage de mot de passe
					if ($_POST['userPass'] == $var['C_Pass']) {
						include_once('../Entity/User.php');

						//On construit l'objet de l'user.
						$user = new User;
						$user->setId($var['U_ID']);
						$user->setUsername($var['U_User']);
						$user->setClients(constructClients($var['U_ID']));
						$user->setAdmin($var['U_Admin']);
						$user->setNom($var['U_Nom']);
						$user->setPrenom($var['U_Prenom']);

						//Construction de la variable de session dans laquelle on va metttre la classe user
						$_SESSION['User'] = $user;

						//Header vers index.php

					} else {
						//Alert JS mauvais mot de passe.
						//Header vers index.php
					}
				}
				else {
					//user non connu
					//Header vers index.php
				}
			}
			//Heavers vers index.php
		}

		function createUser() {
			if (isset($_POST['addUser'])) {
				
				include_once('../General/Checks.php');
				if ($_POST['passUser'] == $_POST['passUserCheck'] && UsernameFree($_POST['username']) && checkRegexMail($_POST['mailUser'])) {
					//Tout est bon, on insere.
					include_once('../Model/UserModel.php'); 
					addUser($_POST['username'], $_POST['passUser'], $_POST['mailUser'], 1);
					//Header vers index.php
				} else {
					//pass differents et/ou Pseudo pas libre
				}
			}
		}

		function Logout() {
			session_destroy();
			//Headers vers index.php
		}

		function deleteUser() {
			if (isset($_POST['delUser'])) {
				include_once('../Model/UserModel.php');
				deleteUserModel($_POST['username']);
			}
		}
	}
?>