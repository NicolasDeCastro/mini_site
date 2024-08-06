<?php

namespace src\source;
class mensagem
{
    private string $mensagem;
    private string $nome;




    public function exibirMensagem($texto)
    {


        return $this->mensagem = $this->filtrar($texto);


    }


    private function filtrar($texto){

        return filter_var($texto,FILTER_DEFAULT);

    }

}







