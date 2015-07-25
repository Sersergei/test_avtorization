<?php
    class Model_user {
        private $login;
        private $email;
        private $password;
        public function get_login(){
            return $this->login;
        }
        public function get_email(){
            return $this->email;
        }
        public function get_password(){
            return $this->password;
        }
        public function set_login($login){
            $this->login=$login;
        }
        public function set_email($email){
            $this->email=$email;
        }
        public function set_password($password){
            $this->password=md5(md5(trim($password)));
        }
        public function reg(){
            $result=Model::connect()->prepare("INSERT INTO users(login,email,password) VALUES (:login,:email,:password)");
            $result->execute($data);
        }
        public function avto($arr){
            $result=Model::connect()->prepare("SELECT `id`,`login` FROM `users` WHERE email=:email and password=password");
            $result->execute($arr);
            $result=$result->fetch();
            return $result;
        }
      
      
    }
?>