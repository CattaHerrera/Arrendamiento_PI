<?php 

class PropertyC extends CI_Controller
{
    public function show(){

        $this->load->model('PropertyM');
        $data['property'] = $this->PropertyM->getPropertys();

        print "Si jala el controlador de propiedad xd";
        $this->load->view('Property/head.php');
        $this->load->view('Property/menu.php');
        $this->load->view('Property/footer.php');
        $this->load->view('Property/listaPropiedades.php', $data);
      
    }

    public function detalleProperty($IdProperty){
        $this->load->model('PropertyM');
        $data['property'] = $this->PropertyM->getProperty($IdProperty);

        $this->load->view('Property/menu.php');
        $this->load->view('Property/head.php');
        $this->load->view('property/detalleProperty.php',$data);
        $this->load->view('Property/footer.php');
    }

    public function borrarProperty($IdProperty){
        $this->load->model('PropertyM');
        if($this->PropertyM->getProperty($IdProperty)){
            redirect(base_url('index.php/PropertyC/show'),'refresh');
        }
    }

    public function intertarProperty($IdProperty){
        $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
             

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('Property/menu.php');
                $this->load->view('property/head.php');
                $this->load->view('propiedad/insertarProperty');
                $this->load->view('Property/footer.php');
            }
            else
            {

            }
    }

    public function getPropertys($IdProperty){
        $this->load->view('Property/head.php');
        $this->load->view('Property/menu.php');
        $this->load->view('Property/footer.php');
    }
}
?>