<?php


class User {
    
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function data($userID = null)
    {
        if ($userID === null) {
            $userID = $_SESSION['user_id'];
        }

        $userID = intval($userID);

        return $this->db->query("SELECT * FROM users WHERE id = $userID")->fetch_assoc();
    }

   
    public function check()
    {
        return isset($_SESSION['user_id']);
    }
    public function auth($login, $password)
    {
        $login = $this->db->real_escape_string($login);
        $tmp = $this->db->query("SELECT id, password FROM users WHERE login = '$login'");

        if (!$tmp->num_rows) {
            return false;
        }

        $userData = $tmp->fetch_assoc();

        if (password_verify($password, $userData['password'])) {
            return $userData['id'];
        } else {
            return false;
        }
    }
}
