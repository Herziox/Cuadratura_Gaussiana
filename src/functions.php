<?php
//Funcion para la obtencion de raices
function raicesSecante($x0,$x1,$tolerancia){
    $itmax = ceil(log(($x1-$x0)/$tolerancia)/log(2));
    $i=0;

    do{
        $x2 = $x1 - evaluarPL($x1)*($x1-$x0)/(evaluarPL($x1)-evaluarPL($x0));
        $x0 = $x1;
        $x1 = $x2;
        $i++;
    }while(abs($x1-$x0)>$tolerancia && abs(evaluarPL($x1))>$tolerancia  && $i<=$itmax);

    if (abs(evaluarPL($x1))>$tolerancia){
        return "Error";
    }

    $factor = pow(10, 8);
    $x1 = round($x1*$factor)/$factor;

    $valores = [$x1,$i];
    return $valores;
}


function raices($a,$b,$n,$tol){
    $h = ($b-$a)/$n;
    $k=1;
    $almenosuno=FALSE;
    $sum = 0;
    $x = array();
    
    $linea="<table class='table'>
    <thead class='thead-dark'>
    <tr class='primeraFila'>
        <th colspan='3'>Raices de la función</th>
    </tr>
    
    <tr>
        <th>N</th>
        <th>Punto</th>
        <th>Iteraciones</th>
    </tr>
    </thead>
    ";

    for($i=1; $i <= $n; $i++) {
        //
        if($i==1){
            $x_n_1 = $a + ($i-1)*$h;   
        }else{
            $x_n_1 = $a + ($i-1)*$h + 0.00000000000001;
        }
        $x_n = $a + $i*$h;
        //
        if(evaluarPL($x_n_1)*evaluarPL($x_n)<0){
            $linea = $linea."<tr><th>$k</th>
            <td>".raicesSecante($x_n_1,$x_n,$tol)[0]."</td><td>".raicesSecante($x_n_1,$x_n,$tol)[1]."</td></tr>";
            array_push($x,raicesSecante($x_n_1,$x_n,$tol)[0]);
            $sum+=raicesSecante($x_n_1,$x_n,$tol)[1];
            $k++;
            $almenosuno=TRUE;
        }else{
            if($i==$n && $almenosuno==FALSE){
                $linea = "¡Ups! No se encontraron raices";
            }
        }
    }

    if($almenosuno==TRUE){
        $linea = $linea."<tr><th></th><td>Total iteraciones:</td><td>".$sum."</td></tr></table>";
    }

    echo $linea;
    return $x;
}


function fact($n){
    $fac = 1;
    for ($i=1; $i <= $n; $i++) { 
        $fac *= $i;
    }
    return $fac;
}

function combinacion($n,$k){
    return fact($n)/(fact($n-$k)*fact($k));
}

function pendienteEn(float $x,float $dx){
    return (evaluarPL($x+$dx)-evaluarPL($x-$dx))/(2*$dx);
}
function derivadaPL($x){
    $dx = 1;
    $L = 0;
    $tolerancia = 1e-12;
    do {
        if ($L == 0){
            $pendiente_L_1 = pendienteEn($x,$dx);
        }else{
            $pendiente_L_1 = $pendiente_L;
        }
        $dx/=2;
        $pendiente_L = pendienteEn($x,$dx);
        $L++;
    } while (abs($pendiente_L-$pendiente_L_1)>$tolerancia);
    return $pendiente_L;
}



?>