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
        if($this->check_track_product($product_id)) {
            $this->db->query("UPDATE p_views SET `pv_count`=(`pv_count`+1) WHERE `pv_productId` = '".$product_id."'"); 
        }
        else {
            $data = array(
                'pv_productId' => $product_id,
                'pv_source' => $this->agent->referrer(),
                'pv_ip' => $this->input->ip_address()
            );
            $this->db->insert('p_views', $data);
        }
    }

    function check_track_product($product_id = 0)
    {
        $data = array(
            'pv_productId' => $product_id,
            'pv_ip' => $this->input->ip_address()
        );
        $query = $this->db->get_where('p_views', $data);
        return $query->num_rows(); 
    }

    function track_look($lid = 0)
    {
        if($this->check_track_look($lid)) {
            $this->db->query("UPDATE l_views SET `lv_count`=(`lv_count`+1) WHERE `lv_lookId` = '".$lid."'"); 
        }
        else {
            $data = array(
                'lv_lookId' => $lid,
                'lv_source' => $this->agent->referrer(),
                'lv_ip' => $this->input->ip_address()
            );
            $this->db->insert('l_views', $data);
        }
    }

    function check_track_look($lid = 0)
    {
        $data = array(
            'lv_lookId' => $lid,
            'lv_ip' => $this->input->ip_address()
        );
        $query = $this->db->get_where('l_views', $data);
        return $query->num_rows(); 
    }
    
}