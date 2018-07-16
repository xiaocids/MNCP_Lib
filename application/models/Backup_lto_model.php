<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Backup_lto_model extends CI_Model
{

  function __construct()
  {
    parent:: __construct();
  }

  public function get_all_data($limit, $start)
  {
      $query = $this->db->get('backup_lto', $limit, $start);
      return $query;
  }

  public function insert($data)
  {
    return $this->db->insert('backup_lto', $data);
  }
}

 ?>
