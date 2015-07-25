<?php
class Controller_Main extends Controller
{
    function action_index()
    {	
        
        if(!$_SESSION['user']['login']){
        $this->view->generate('main_view.php', 'template_view.php');
        }
        else{
            header("location: /user");
        }
    }
    function action_languige(){
        if($_GET['languige']==='ru' or $_GET['languige']==='en')
        t::sett($_GET['languige']);
        
        header("location: /");
    }
}
?>