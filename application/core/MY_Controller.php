<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{

    function __construct()
    {
        parent::__construct();

        $twig_cfg = [
            'paths' => [
                'temas/modules/' . $this->router->fetch_module() . '/',
                'temas/',
                VIEWPATH,
                APPPATH . 'modules/' . $this->router->fetch_module() . '/views/'
            ],
            'cache' => APPPATH . '/cache/twig',
        ];

        $this->load->library('twig', $twig_cfg);

        $twig = $this->twig->getTwig();
        $function = new \Twig_SimpleFunction('theme_asset', function ($asset) {
            return base_url() . "/temas/assets/" . $asset;
        });

        $twig->addFunction($function);

    }

}