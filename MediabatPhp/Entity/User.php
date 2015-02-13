<?php

	Class User {

		var $id;
		var $username;
		var $clients;
		var $admin;
		var $nom;
		var $prenom

		function __construct() {
			$this->clients = array();
		}

		function setId($id) {
			$this->id = $id;
		}

		function setUser($u) {
			$this->username = $u;
		}

		function setClients($c) {
			foreach ($c as $key => $value) {
				$this->clients[] = $value;
			}
		}

		function setAdmin($a) {
			$this->admin = $a;
		}

		function setNom($n) {
			$this->nom = $n;
		}

		function setPrenom($p) {
			$this->prenom = $p;
		}

		function getId() {
			return $this->id;
		}

		function getUsername() {
			return $this->username;
		}

		function getClients() {
			return $this->clients;
		}

		function getAdmin() {
			return $this->admin;
		}

		function getNom() {
			return $this->nom;
		}

		function getPrenom() {
			return $this->prenom;
		}
	}
?>