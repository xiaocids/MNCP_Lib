<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layouts {
  private $CI;
  private $title;
  private $title_separator = ' | ';
  private $includes = array();


  public function __construct()
  {
    $this->CI =& get_instance();
  }

  public function set_title($title)
  {
    $this->title = $title;
  }
  public function view($view_name, $params = array(), $layout = 'default')
  {
    $rendered_view = $this->CI->load->view($view_name, $params, TRUE);
    if ($this->title !== NULL)
    {
      $this->title = $this->title_separator . $this->title;
    }
    
    $this->CI->load->view('layouts/' . $layout, array(
      'content' => $rendered_view,
      'title' => $this->title,
    ));
  }

  public function add_include($path, $prepend_base_url = TRUE)
  {
    if ($prepend_base_url)
    {
      $this->CI->load->helper('url');
      $this->includes[] = base_url() . $path;
    }
    else
    {
      $this->includes[] = $path;
    }

    return $this;
  }

  public function print_includes()
  {
    $final_includes = '';
    foreach ($this->includes as $include) {
      if (preg_match('/js$/', $include))
      {
        $final_includes .= '<script src="' . $include . '"></script>';
      }
      elseif (preg_match('/css$/', $include))
      {
        $final_includes .= '<link href="' . $include . '" />';
      }
    }

    return $final_includes;
  }

}
