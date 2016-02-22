<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = "Home Page";
        $data['content_view'] = "home_v";

        $this->twig->display('base', $data);
    }


}