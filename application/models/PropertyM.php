<?php 
class PropertyM extends CI_Model
{
    
     function getPropertys(){
        $query=$this->db->get('Propertys');
        return $query->result();
      
    }
    function getProperty($IdProperty){
        $this->db->where('IdProperty',$IdProperty);
        $query = $this->db->get('Property');
        return $query->result();
    }
    function deleleProperty($IdProperty){
        $this->db->where('IdProperty', $IdProperty);
        $this->db->delete('Propiedad');
        return TRUE;
    }
}
?>