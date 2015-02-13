<?php

	class UserModel {

		function getUser($nom) {
			if (isset($nom)) {
				include_once('../General/connexion.php');
				$co = getConnexion();
				if ($co != null) {
					//requete pour recuperer les informations personnelles d'un utilisateur

					$co = null;
				}
			}

			return null;
		}
		/*
		Construit la jointure des differents clients d'un username.
		*/
		function constructClients($nomUser) {
			if (isset($nomUser)) {
				include_once('../General/connexion.php');
				$co = getConnexion();
				if ($co != null) {
					//Jointure pour recuperes tout les clients d'un utilisateur

					$co = null;
				}
			}

			return null;
		}
		/*
			Regarde si un nom user est déjà pris.
			Retourne 0, nom déjà pris
			Retourne 1, nom user libre
		*/
		function UsernameFree($nomUser) {
			if (isset($nomUser)) {
				include_once('../General/connexion.php');
				$co = getConnexion();
				if ($co != null) {
					

					$co = null;
				}
			}

			return 0;
		}

		function addUser($nom, $pass, $mail, $admin) {
			if (isset($nom) && isset($pass) && isset($mail) && isset($admin)) {
				include_once('../General/connexion.php');
				$co = getConnexion();
				if ($co != null) {
					//Creation d'un utilisateur

					$co = null;
				}
			}

			return null;
		}

		function deleteUserModel($nom) {
			if (isset($nom)) {
				include_once('../General/connexion.php');
				$co = getConnexion();
				if ($co != null) {
					//Suppression du client
					
					$co = null;
				}
			}
		}
	}
?>