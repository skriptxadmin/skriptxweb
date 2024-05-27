<?php

namespace App\Controllers;

use Smarty\Smarty;

class Controller
{

    protected $smarty;

    public function __construct()
    {

        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir(ROOT_DIR.'app/Views/');

        $this->smarty->assign('site_url', $_ENV['SITE_URL']);

        $this->smarty->assign('current_url', $this->getCurrentUrl());

        $this->smarty->assign('app_version', $_ENV['APP_VERSION']);

        $this->smarty->assign('framework_name', 'NAMO PHP');

        $this->smarty->registerFilter("output", [$this, "minify_html"]);

        $this->smarty->assign('meta_title', 'SkriptX - Expert Software Training and Custom Development Solutions');

        $this->smarty->assign('meta_description', 'Discover Skriptx, your gateway to expert software training and custom development solutions. From comprehensive PHP and Node.js training to bespoke software development services, we empower individuals and businesses with cutting-edge technology solutions. Join us in transforming ideas into reality.');

        $this->smarty->assign('meta_image',  $_ENV['SITE_URL'].'/images/logos-bundle/white.png');
    }

    function minify_html($tpl_output,  $template) {
        $tpl_output = preg_replace('![\t ]*[\r\n]+[\t ]*!', '', $tpl_output);
        return $tpl_output;
    }

    function getCurrentUrl() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $host = $_SERVER['HTTP_HOST'];
        $uri = $_SERVER['REQUEST_URI'];
        return $protocol . "://" . $host . $uri;
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
