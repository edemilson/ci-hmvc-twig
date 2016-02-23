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

        $twig = $this->twig->getTwig();
        $twig->addFunction(new \Twig_SimpleFunction('busca_clientes', [$this, 'data_sample']));

        $this->twig->display('layout', $data);
    }

    function data_sample($id = false)
    {
        $this->load->model('HomeModel');
        $r = $this->HomeModel->data_sample();
        if($id){
            $r = array($r[$id]);
        }
        return $r;
    }


}