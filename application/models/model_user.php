<?php
class Model_user
{
    private $login;
    private $email;
    private $password;
    public $error;
    private $t;
    function __construct()
    {
        $this->t = t::gett();
    }
    public function get_login()
    {

        return $this->login;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function set_login($login)
    {
        $login = trim($login);
        if (strlen($login) < 2) {
            $this->error = $this->t['Length username should be more than two symbols'];
            return false;
        }
        $login = ucfirst(mb_strtolower($login));
        $this->login = $login;
        return true;
    }
    public function set_email($email)
    {
        $email = trim($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error = $this->t['You entered incorrectly email'];
            return false;
        }
        $email = mb_strtolower($email);
        $this->email = $email;
        return true;
    }
    public function set_password($password)
    {
        $email=trim($password);
        if (strlen($password) < 3) {
            $this->error = $this->t['Length password should be more than 3 symbols'];
            return false;
        }
        $this->password = md5(md5(trim($password)));
        return true;
    }
    public function save()
    {
        
        try {
            $result = DBconnect::getInstance();
            $result->prepare("INSERT INTO users(login,email,password) VALUES (:login,:email,:password)");
            $result->bindParam(':login', $this->login);
            $result->bindParam(':email', $this->email);
            $result->bindParam(':password', $this->password);
            $result->execute();
        }
        catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            exit();
        }
    }
    public function avto($arr)
    {
        $result = Model::connect()->prepare("SELECT `id`,`login` FROM `users` WHERE email=:email and password=password");
        $result->execute($arr);
        $result = $result->fetch();
        return $result;
    }


}
?>