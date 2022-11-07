<?php 
class PropertyM extends CI_Model
{
    
     function getPropertys(){
        $query=$this->db->get('propiedades');
        return $query->result();
      
    }
    function getProperty($IdProperty){
        $this->db->where('IdProperty',$IdProperty);
        $query = $this->db->get('propiedades');
        return $query->result();
    }
    function deleleProperty($IdProperty){
        $this->db->where('IdProperty', $IdProperty);
        $this->db->delete('propiedades');
        return TRUE;
    }
}
?>