<?php

namespace src\source;
class Helpers
{
    // $teste = "alou@gmail.com";
//     $caminho = __DIR__ . '/banco.sqlite';

// $pdo = new PDO("sqlite:" . "$caminho");
// date_default_timezone_set("America/Sao_paulo");


/**
 * @return string tardeS
 */
public static function teste ()
{
    return 'tarde';
}

public static function redirecionar(string $erro)
{
header('location:blog/404');
exit();

}
public static function formatador(float $valor = null)
{
return number_format(($valor ? $valor : 0),2,",",".");

}

public static function contarTempo($data)
{
    $data1 = strtotime($data);
    $agora = strtotime(date("d-m-Y H:i:s"));

    echo "<hr>";

    $diferença = $agora - $data1;


    $segundos = $diferença;

    $minutos = round($diferença/60);
    $horas = round($diferença/3600);
    $dias = round($diferença/86400);
    $semanas = round($diferença/604800);
    $meses = round($diferença/2419200);
    $anos = round($diferença/29030400);
    var_dump($segundos,$minutos,$horas,$dias,$semanas,$meses,$anos);
}



public static function validaGmail($gmail):bool
{
    if(mb_strlen($gmail)<10){
        return false;
    }
    if(!str_contains($gmail,".")){

        return false;
    }
    if (!str_contains($gmail,"@")){
        return false;
    }
// return filter_var($gmail,FILTER_VALIDATE_EMAIL,);
return true;
}




public static function limpaString($string):string
{ 
    $mapa['a']= 'ÀÈC';
    $mapa['b']= 'áéç';
    $slug = strtr($string,$mapa['a'],$mapa['b']);
    $slug =strip_tags( trim($slug));
    $slug = str_replace(" ","-",$slug);
    return strtolower($slug);

}


public static function saudacao($agora):string
{
    $saudacao = match(true){
        $agora <=5 && $agora >=0 => "boa noite",
        default => "bom dia!!"


    };
    return $saudacao;
}
    
}
