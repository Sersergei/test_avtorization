<?php 
class Controller_User extends Controller{
     function  action_index(){
        var_dump('hjfhgf');
        $data=null;
        $this->view->generate('template_view.php',$data);
     }
    function action_avto($valid=0){
        //функция авторизации пользователя
        if(!$valid==0){$_POST=$valid;}
        
        if(!$_POST){
        
        }
        else{
            $valid=$this->validate($_POST);
            if(isset($valid['password'])){
                $avto=Model_user::avto($valid);
                if($avto){
                    $_SESSION['user']['login']=$avto['login'];
                    $_SESSION['user']['id']=$avto['id'];
                    $this->redirect();
                }
                else{
                    $data['error']="Вы ввели неправильный логин или пароль";
                }  
            } 
        }
       $this->view->generate('user_avto_view.php','template_view.php',$data); 
    }
    function action_reg(){
        //функция регистрации
        if(!$_POST){
            
        }
        else{
           
           $valid= $this->validate($_POST);//отправляем данные на проверку
            
           if(!isset($valid['error'])){
            $insert=Model_user::reg($valid);
        if(!$insert){
            $this->action_avto($_POST);
        }
           }
           else{
              
            $data['error']=$valid['error'];
            $data['post']=$_POST;
            
           }
            
           } 
            $this->view->generate('user_reg_viewer.php','template_view.php',$data);
        }
        
    private function redirect(){
        //редирект 
        $href=$_SERVER['HTTP_HOST'];
    
         header("Location: /");
        
    }
    function validate($arr) {
        //проверка введенных данных 
        if($arr['login']=="") { $this->error= "Вы не ввели логин";}
        if($arr['password']=="") {$this->error." Вы не ввели пароль";}
        if($arr['email']=="") {$error=$error." Вы не ввели email адресс";}
        $login=trim(strip_tags($arr['login']));
        $password=md5($arr['password']);
        $email=trim(strip_tags($arr['email']));
        $valid['login']=$login;
        $valid['password']=$password;
        $valid['email']=$email;
        //$valid['error']=$error;
        
        return $valid;
        }
        function action_logaut(){
            //выход пользователя
        session_unset();
        $this->redirect();
        }
 
}
?>