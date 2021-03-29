<?php

class User {
    private $user_id;
    private $firstname;
    private $lastname;
    private $email;
    private $pass;
    private $city;
    private $country;
    private $photo_url;

    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:dbname=rezodb;host=localhost', 'alkaj', '');
        } catch(Exception $e) {
            die($e);
        }
    }

    public function index() {
        $req = "select * from user;";
        $users_curs = $db->exec($req);

        return $users_curs->fetchAll();
    }

    public function signup($email, $pass) {
        $req = "insert into user(email, pass)values(:email, :pass);";

        $prep = $this->db->prepare($req);
        $resultat = $prep->execute(['email' => $email, 'pass' => $pass]);
        return $resultat;
    }

    public function login1($request) {
        $req = "select * from user where email = :email;";
    }

    public function login2($request) {
        $req = "select * from user where pass = :pass;";
    }
}