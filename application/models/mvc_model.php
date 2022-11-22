<!-- make mvc model -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mvc_model extends CI_Model {

    public function __construct () {
        parent::__construct();
    }

    public function getAggregasi()
    {   
    $query = "SELECT category, count(*) as count
            FROM data, kategori 
            WHERE data.kategori_id = kategori.id
            GROUP BY category"; 
    $result = $this->db->query($query);
    return $result->result();
}

}