<?php

namespace src\Controller;

use src\Suporte\Template;
class siteController 
{

    protected Template $template;
    function __construct()
    {
        $this->template = new Template(__DIR__. '/../../templates/site/views');

    }
    public function index(){

        // echo ( new Template('src/templates/sites/views') )->renderizar( 'index.html',["titulo"=>'ola'] );
        return $this->template->renderizar('index.html',["titulo"=>'ola']);
    }

    public function sobre(){

        echo ( new Template(__DIR__. '/../../templates/site/views') )->renderizar( 'sobre.html',["titulo"=>'ola'] );

       
    }

    public function erro404(){

        echo ( new Template(__DIR__. '/../../templates/site/views') )->renderizar( '404.html',["titulo"=>'erro'] );

       
    }
}



