<?php

namespace App\Controllers;

use Smarty\Smarty;

class Controller
{

    protected $smarty;

    public function __construct()
    {

        $dotenv = \Dotenv\Dotenv::createImmutable(ROOT_DIR);

        $dotenv->load();

        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir(ROOT_DIR.'src/Views/');

        $this->smarty->assign('site_url', $_ENV['SITE_URL']);

        $this->smarty->assign('app_version', $_ENV['APP_VERSION']);

        $this->smarty->assign('framework_name', 'NAMO PHP');

    }

    public function view($view, $args = null)
    {

        if (!empty($args) && gettype($args) == 'array') {

            foreach($args as $key => $value){

                $this->smarty->assign($key, $value);
            }
        }

        $this->smarty->display($view.'.html');
    }
}
