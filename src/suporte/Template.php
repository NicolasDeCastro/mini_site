<?php

namespace Src\Suporte;
use src\source\Helpers;
use Twig\Lexer;
use Twig\TwigFunction;


class Template 
{


    private \Twig\Environment $twig;

    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twig = new \Twig\Environment($loader);
        $lexer = new Lexer($this->twig,[$this->helpers()]);
        $this->twig->setLexer($lexer);
    
    
    }


    public function renderizar( string $view, array $dados)
    {
        return $this->twig->render($view,$dados);

    }

    private function helpers():void
    {
        array($this->twig->addFunction(
            new TwigFunction('url',function(string $url = null){
                return  Helpers::limpaString("olá");
            })
        ),
        $this->twig->addFunction(
            new TwigFunction('teste',function(){
            return Helpers::validaGmail("nico.com");
        })
    ));
    }



}