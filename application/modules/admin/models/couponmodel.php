<?php
class Couponmodel extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_coupons()
    {
        $query = $this->db->query("SELECT * FROM coupons");
        $data = $query->result();
        return $data;
    }
    
    function get_coupons_count()
    {
        $query = $this->db->query("SELECT * FROM coupons");
        $data = $query->num_rows();
        return $data;
    }

    function get_brand($brand_id = 0)
    {
        $query = $this->db->get_where('brands', array('brand_id' => $brand_id));
        $data = $query->result();
        return $data;
    }

    function get_active_brands()
    {
        $query = $this->db->query("SELECT * FROM brands WHERE brand_status = '1'");
        $data = $query->result();
        return $data;
    }

    function add_brand($name = '', $desc = '', $status = '0')
    {
        $data = array(
           'brand_name' => $name ,
           'brand_desc' => $desc,
           'brand_status' => $status
        );
        $this->db->insert('brands', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function update_brand($brand_id = 0, $name = '', $desc = '', $status = '0')
    {
        $data = array(
           'brand_name' => $name ,
           'brand_desc' => $desc,
           'brand_status' => $status
        );
        $this->db->where('brand_id', $brand_id);
        $updated_id = $this->db->update('brands', $data);
        return $updated_id;
    }

    function remove($coupon_id)
    {
        $this->db->delete('coupons', array('c_id' => $coupon_id)); 
    }
}