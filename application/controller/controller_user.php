<?php 
class Controller_User extends Controller{
     function  action_index(){
        var_dump('hjfhgf');
        $data=null;
        $this->view->generate('template_view.php',$data);
     }
    function action_avto($valid=0){
        //������� ����������� ������������
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
                    $data['error']="�� ����� ������������ ����� ��� ������";
                }  
            } 
        }
       $this->view->generate('user_avto_view.php','template_view.php',$data); 
    }
    function action_reg(){
        //������� �����������
        if(!$_POST){
            
        }
        else{
           
           $valid= $this->validate($_POST);//���������� ������ �� ��������
            
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
        //�������� 
        $href=$_SERVER['HTTP_HOST'];
    
         header("Location: /");
        
    }
    function validate($arr) {
        //�������� ��������� ������ 
        if($arr['login']=="") { $this->error= "�� �� ����� �����";}
        if($arr['password']=="") {$this->error." �� �� ����� ������";}
        if($arr['email']=="") {$error=$error." �� �� ����� email ������";}
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
            //����� ������������
        session_unset();
        $this->redirect();
        }
 
}
?>