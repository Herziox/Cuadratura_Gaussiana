<?php

function imprimirFunc($func){
    $func = str_replace("-","+(-1)*",$func);
    $monomios = explode("+",$func);
    $linea = "";
    for ($i=0; $i < sizeof($monomios); $i++) { 
        if(strpos($monomios[$i],"^")){
            $arrayDeCadenas = explode("^", $monomios[$i]);
            $arrayDeCadenas[1]="<sup>".$arrayDeCadenas[1]."</sup>"; 
            $monomios[$i]=$arrayDeCadenas[0].$arrayDeCadenas[1];
        }
        if ($i === 0){
            $linea = $monomios[$i];
        }else{
            $linea = $linea . "+" . $monomios[$i];
        }
    }
    $linea = str_replace("+(-1)*","-",$linea);
    return $linea;
}

function validar($x){
    $arrayDeCadenas = explode("*", $x);
    $x=1;
    for ($i=0; $i < sizeof($arrayDeCadenas); $i++) { 
        if (strcmp("-",$arrayDeCadenas[$i][0]) === 0) {
            $x *= -1;
            $arrayDeCadenas[$i] = str_replace( "-", '', $arrayDeCadenas[$i]);
        }
    
        if(strcmp("π",$arrayDeCadenas[$i])===0){
            $x *= pi();
        }else{
            $x*=(float)$arrayDeCadenas[$i];
        }
    }
    return $x;
}

function validarF($func){
    $func = str_replace("ln(","log(",$func);
    $func = str_replace("-","+(-1)*",$func);
    $monomios = explode("+",$func);
    $linea= "";
    for ($i=0; $i < sizeof($monomios); $i++) { 
        $arrayDeCadenas = explode("x", $monomios[$i]);
  
        if(preg_match("/[0-9]+/",$arrayDeCadenas[0])){
            $monomios[$i] = str_replace("x",'*$x',$monomios[$i]);
        }else{
            $monomios[$i] = str_replace("x",'$x',$monomios[$i]);
        }
        if ($i === 0){
            $linea = $monomios[$i];
        }else{
            $linea = $linea . "+" . $monomios[$i];
        }
    }
    $func = $linea;
    $func = str_replace("^","**",$func);

    return $func;
}

function generarPL($n){
    $v = 1/(2**$n);
    $linea = "$v*(";

    for ($i=0; $i <= $n; $i++) { 
        if ($i==0) {
            $linea = $linea."(c($n,$i)**2)*((".'$x'."+1)**($n-$i))*((".'$x'."-1)**($i))";
        }else{
            $linea = $linea."+(c($n,$i)**2)*((".'$x'."+1)**($n-$i))*((".'$x'."-1)**($i))";
        }
    }

    return $linea.")";
}

?>