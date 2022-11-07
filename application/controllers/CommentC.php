<?php 

class CommentC extends CI_Controller
{
    public function show(){
        print "Si jala el controlador de comentarios xd";
       /* $this->load->view('Comment/head.php');
        $this->load->view('Comment/menu.php');
        $this->load->view('Comment/footer.php');*/
        $this->load->view('Main/vista.php');
    }

    public function getComment($IdComment){
        $this->load->view('Comment/menu.php');
        $this->load->view('Comment/menu.php');
        $this->load->view('Comment/footer.php');
        $this->load->view('Main/vista.php');
    }
}
?>