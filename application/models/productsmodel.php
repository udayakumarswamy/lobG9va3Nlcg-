<?php
class Productsmodel extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_products()
    {
        $this->db->cache_on();
        $query = $this->db->query("SELECT p.*, b.brand_name, pr.provider_name, pr.provider_image FROM products p, brands b, providers pr WHERE p.p_provider = pr.provider_id AND p.p_brand = b.brand_id AND p_status = '1' ORDER BY RAND() LIMIT 0,20");        
        $data = $query->result();
        return $data;
    }

    function get_trending_products()
    {
        $this->db->cache_on();
        $query = $this->db->query("SELECT * FROM products WHERE p_status = '1' AND p_provider = '5' ORDER BY RAND() LIMIT 0,8");        
        $data = $query->result();
        return $data;
    }

    function get_rproducts($cat = 0) {
        $this->db->cache_on();
        $query = $this->db->query("SELECT * FROM products WHERE p_category = ".$cat." AND p_status = '1' ORDER BY RAND() LIMIT 0,8");        
        $data = $query->result();
        return $data;
    }

    function get_product($product_id = 0)
    {
        $this->db->cache_on();
        $query = "SELECT p.p_id, p.p_storeId, p.p_name, p.p_desc, p.p_image, p.p_size, p.p_oimage, p.p_url, p.p_mrp, p.p_price, p.p_category, pc.pc_name, b.brand_name, pro.provider_name FROM products p, p_categories pc, brands b, providers pro WHERE p.p_category = pc.pc_id AND p.p_brand = b.brand_id AND p.p_provider = pro.provider_id AND p.p_status = '1' AND p.p_id = ".$product_id;
        $query = $this->db->query($query);
        $data = $query->row_array();
        return $data;
    }

    function s_products($pdt = '', $gen = '', $cat = array())
    {
        $this->db->cache_on();
        $condition = array();
        if($pdt != '') {
            $condition[] = " p.p_name LIKE '%".$pdt."%' "; 
        }
        else {
            $condition[] = " p.p_name != '' "; 
        }
        if($gen != '') {
            $condition[] = " p.p_gender = '".$gen."' "; 
        }
        if(count($cat)) {
            $condition[] = " p.p_category in (".implode(',', $cat).") "; 
        }
        $condition = implode(' AND ', $condition);

        $query = "SELECT p.p_id, p.p_name, p.p_image, p.p_mrp, p.p_price, p.p_category, p.p_size FROM products p WHERE " .$condition. " AND p.p_status = '1' ORDER BY RAND() LIMIT 0,100";
        $query = $this->db->query($query);
        $data = $query->result();
        return $data;
    }

    function pf_products($f_cat = array(), $f_prov = array(), $f_dis = array(), $f_size = array(), $f_gen ='')
    {
        $this->db->cache_on();
        $condition = array();
        $condition1 = array();
        $condition[] = " p.p_name != '' "; 

        if(count($f_cat) && is_array($f_cat)) {
            $condition[] = " p.p_category in (".implode(',', $f_cat).") "; 
        }
        if(count($f_prov) && is_array($f_prov)) {
            $condition[] = " p.p_provider in (".implode(',', $f_prov).") "; 
        }
        if(count($f_size) && is_array($f_size)) {
            $condition[] = " p.p_size in ('".implode("','", $f_size)."') "; 
        }
        if(count($f_dis) && is_array($f_dis)) {
            foreach ($f_dis as $key => $dis) {
                $dis = explode('-', $dis);
                $condition1[] = " (100-((p.p_price/p.p_mrp)*100) > ".$dis[0]." AND (100-(p.p_price/p.p_mrp)*100) < ".$dis[1].") "; 
            }

            $condition[] = " (".implode(' OR ', $condition1).") "; 
        }
        if($f_gen != '') {
            $condition[] = " p.p_gender = '".$f_gen."' "; 
        }
        $condition = implode(' AND ', $condition);

        $query = "SELECT p.p_id, p.p_name, p.p_image, p.p_mrp, p.p_price, p.p_category, p.p_size FROM products p WHERE " .$condition." AND p.p_status = '1' ORDER BY RAND() LIMIT 0,100";
        $query = $this->db->query($query);
        $data = $query->result();
        return $data;
    }
}