<?php 

class PropertyC extends CI_Controller
{
    public function show(){

        $this->load->model('PropertyM');
        $data['propiedades'] = $this->PropertyM->getPropertys();

        $this->load->view('Property/head.php');
        $this->load->view('Property/menu.php');
        $this->load->view('Property/footer.php');
        $this->load->view('propiedades/listaPropiedades.php', $data);
      
    }

    public function detalleProperty($IdProperty){
        $this->load->model('PropertyM');
        $data['property'] = $this->PropertyM->getProperty($IdProperty);

        $this->load->view('Property/menu.php');
        $this->load->view('Property/head.php');
        $this->load->view('propiedades/detalleProperty.php',$data);
        $this->load->view('Property/footer.php');
    }

    public function borrarProperty($IdProperty){
        $this->load->model('PropertyM');
        if($this->PropertyM->getProperty($IdProperty)){
            redirect(base_url('index.php/PropertyC/show'),'refresh');
        }
    }

    public function intertarProperty($IdProperty){
        $this->load->model('PropertyM');
        $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
             

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('Property/menu.php');
                $this->load->view('property/head.php');
                $this->load->view('propiedades/insertarProperty');
                $this->load->view('Property/footer.php');
            }
            else 
            {
                $this->PropertyM->insertarProperty();
                redirect(base_url('index.php/PropertyC/show'),'refresh');
            }
    }

    public function actualizarProperty($IdProperty){
		$this->load->model('PropertyM');
		$data['property'] = $this->Proprety->getProperty($IdProperty);

		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
                if ($this->form_validation->run() == FALSE)
                {		
                		$this->load->view('Property/head.php');
						$this->load->view('Property/menu.php');
                        $this->load->view('propiedades/actualizarProperty',$data);
                        $this->load->view('Property/footer.php');
                }
                else
                {
                       $this->PropertyM->updateProducto($IdProperty);
                       redirect(base_url('index.php/PropertyC/show'),'refresh');
                }
	}

    public function getPropertys($IdProperty){
        $this->load->view('Property/head.php');
        $this->load->view('Property/menu.php');
        $this->load->view('Property/footer.php');
    }
}
?>