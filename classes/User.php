<?php
class User {
    private $id;
    private $username;
    private $password;
    private $email;

    public function __construct($i, $uname, $pwd, $e) {
        $this->id = $i;
        $this->username = $uname;
        $this->password = $pwd;
        $this->email = $e;
    }
    public function getId() { return $this->id; }
    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
    public function getEmail() { return $this->email; }

    public function setId($i) { $this->id = $i; }
    public function setUsername($n) { $this->username = $n; }
    public function setPassword($p) { $this->password = $p; }
    public function setEmail($e) { $this->email = $e; }
}
?>
