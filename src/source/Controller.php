<?php

namespace Src\Source;
use src\Suporte\Template;
class Controller
{

protected Template $template;

function __construct(string $diretorio)
{
    $this->template = new Template($diretorio);
}



}
