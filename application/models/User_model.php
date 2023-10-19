<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model 
{
    private $table = 'data_user';
    public function select()
    {

    }       
    
    public function store()
    {
        $data = array
        (
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        return $this->db->insert($this->table, $data);
    }
                        
}


/* End of file User_model.php and path \application\models\User_model.php */
