<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function data_sample()
    {
        return array(
            array('nome'=> 'edemilson', 'id' => 1),
            array('nome'=> 'carlos', 'id' => 2),
            array('nome'=> 'cesar', 'id' => 3)
        );
    }
}