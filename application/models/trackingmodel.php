<?php
class Trackingmodel extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function track_product($product_id = 0)
    {
        $data = array(
            'pv_productId' => $product_id,
            'pv_ip' => $this->input->ip_address()
        );
        $this->db->insert('p_views', $data);
    }

    function track_look($lid = 0)
    {
        $data = array(
            'lv_lookId' => $lid,
            'lv_ip' => $this->input->ip_address()
        );
        $this->db->insert('l_views', $data);
    }
    
}