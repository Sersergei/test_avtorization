<?php 
class Controller_User extends Controller{
     function  action_index(){
       
        $data=null;
        $this->view->generate('login_view.php','template_view.php',$data);
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
       $this->view->generate('login_view.php','template_view.php',$data); 
    }
    function action_reg(){
        //������� �����������
        if(!$_POST){
            
        }
        else{
       $user=new Model_user;
       
       
        if($user->set_email($_POST['emailsignup']) and $user->set_password($_POST['passwordsignup']) and $user->set_login($_POST['usernamesignup'])){
            if($_POST['passwordsignup_confirm']===$_POST['passwordsignup']){
                $user->save();
                }
            else{
                
        $t=t::gett();
        $user->error=$t['Repeat your password correctly'];
       }
                
            }
        }
       
       
            
           
           
            $this->view->generate('register_view.php','template_view.php',$user);
        }
        
    private function redirect(){
        //�������� 
        $href=$_SERVER['HTTP_HOST'];
    
         header("Location: /");
        
    }

        function action_logaut(){
            //����� ������������
        session_unset();
        $this->redirect();
        }
 
}
?>