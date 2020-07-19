<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./css/13_Thoma s_Guass-Jacobi.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://i.imgur.com/c1VjDtt.png" />
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@400;700&display=swap" rel="stylesheet" />
   <!-- <link rel="stylesheet" href="../css/main.css"> -->
   <link rel="stylesheet" href="./css/Cuadratura_Gaussiana.css">
   <script src="https://www.geogebra.org/apps/deployggb.js"></script>
    <title>Cuadratura Gaussiana</title>
<script src="./js/Cuadratura_Gaussiana.js"> </script>
</head>
    
<body>

    <header class="">
    
    </header>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
        
        <a class="navbar-brand btn-outline-success" href="#"> <img src="https://i.imgur.com/c1VjDtt.png" class="img-fluid image-nav"  alt="Responsive image"> Cuadratura Gaussiana </a>
            
        <a class="navbar-brand btn-outline-success" href="#ingresarDatos">Ingresar Datos</a>
            <button class="navbar-toggler" type="button" >
                <span ></span>
            </button>
        <a class="navbar-brand btn-outline-success" href="#grafica">Gráfica</a>
        <button class="navbar-toggler" type="button" >
            <span ></span>
        </button>
        <a class="navbar-brand btn-outline-success" href="#resultados">Resultados</a>
        <button class="navbar-toggler" type="button" >
            <span ></span>
        </button>
            
        </nav>

    <div class="title">
            <h1>Cuadratura Gaussiana</h1>
     </div>
    <section id ="ingresarDatos"class="datos-details">
       
        <div class="form-all">
            <h3 class="centrar-texto texto-blancho">INGRESO DE DATOS</h3>
            <form class="formulario" action="" method="post">
            <div class="flexbox">
                <div class="recuadro">
                    <label for="validationDefault02" >Limite Inferior</label>
                    <input type="text" class="form-control" name="a" id="a" placeholder="Por ejemplo: 0" value="<?php if (isset($_POST['a'])) echo $_POST['a']; else echo "-10"; ?>"
                        step="0.0000001">
                    <input type="button" value="π" onclick="colocarPiA() " class="btn btn-primary"/>
                </div>

                <div class="recuadro">
                    <label for="validationDefault02"> Limite superior</label>
                    <input type="text" class="form-control" name="b" id="b" placeholder="Por ejemplo: 2*π" value="<?php if (isset($_POST['b'])) echo $_POST['b']; else echo "10"; ?>"
                        step="0.0000001" />
                    <input type="button" value="π" onclick="colocarPiB()" class="btn btn-primary"  />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
            
                <label for="validationDefault02"> Número de subintervalos</label>
                <input class="form-control"  type="number" name="n" id="n" placeholder="Por ejemplo: 15"value="<?php if (isset($_POST['n'])) echo $_POST['n']; else echo "100"; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                <label for="validationDefault02">Función <br> <span
                            style="color:red;font-size:2rem;">*</span> f(x) =
                    </label>
                    <input class="form-control"  type="text" name="funcion" id="funcion" placeholder="x^2 + 2x + 1" required value="<?php if (isset($_POST['funcion'])) echo $_POST['funcion']; else echo "x*x-6"; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                <label for="validationDefault02">Tolerancia</label>
                    <input class="form-control"  type="number" name="tol" id="tol" placeholder="0.00001" step="0.0000000001" value="<?php if (isset($_POST['tol'])) echo $_POST['tol']; else echo "0.001"; ?>">
                </div>
            </div>

            <div class="flexbox">
            <input class="btn btn-primary"  class="centrar boton" type="submit" value="Calcular" id="btnA" name="btnA" />
                </div> 

               

            </form>
        </div>
        
    </section>

    <!-- Programar por Aquiiiiiiiiiiiii -->
   
        <?php

            include 'evaluar.php';

            if(isset($_POST['btnA'])){
    //INICIO - Declaración de las variables
                $a =$_POST['a'];
                $b =$_POST['b'];
                $n = $_POST['n'];
                $funcion = $_POST['funcion'];
                $tol = $_POST['tol'];  
     //FIN - Declaración de las variables

     //Validacion de extremos
                $a = validar($a);
                $b = validar($b);
    // Graficadora de Geogebra
                echo "
                <section id='grafica' class='margen'>
                <h3> Gráfica de la función</h3>
                <div id='ggb-element' style='margin: 0 auto'></div>
                
                    <script>
                        var ggbApp = new GGBApplet({
                            'appName': 'graphing',
                            'showZoomButtons':true,
                            'height': 500,
                            'showToolBar': true,
                            'showAlgebraInput': true,
                            'showMenuBar': true,
                            'appletOnLoad': function(api) {
                            api.evalCommand('Function($funcion,$a,$b)');}}, true);
                            window.addEventListener('load', function() {
                                ggbApp.inject('ggb-element');
                            });
                    </script>
                </section>
                ";
    //Impresion de funcion en notación formal
                $fprint = imprimirFunc($funcion);
                echo "
                <section id='resultados' class='resultados' >
                <h3> Resultados </h3>
                <div class='resultados-details'>
                <h4 class='centrar-texto' style='padding: 1rem 0 1rem 0;'>
                        Su función evaluada es:
                        <br>
                        <span id='formula'>
                            f(x) = $fprint 
                        </span>
                        <br>
                        en el intervalo [$a , $b]
                    </h4>
                ";

    //Validar Funcion
                $f = validarF($funcion);

    //INICIO - FUNCION DADA
               eval('function evaluarEn($x){
                    $h = '.$f.';
                    return $h;
                }');
    //FIN - FUNCIÓN DADA

    //INICIO - MAIN

                $h = ($b-$a)/2;        
                $integral = 0;
                $j=2;
        
                $fpl = generarPL($j);
                eval('function evaluarPL($x){
                          $h = '.$fpl.';
                          return $h;
                      }');
                      
                include 'functions.php';
    
                $root = raices(-1,1,$n,$tol);
                for ($i=0; $i < count($root) ; $i++) {
                    $raiz=$root[$i];
                    $pl = derivadaPL($raiz);
                    $w = 2/((1-($raiz**2))*($pl**2));
                    $integral += $w*evaluarEn($h*$raiz + ($h+$a));
                    
                }
                $integral=$h*$integral;

                echo "<h4>La integral es: $integral</h4>
                </div>
                </script>";
    //FIN - MAIN

            }else{
                    header("Status: 301 Moved Permanently");
                    header("Location: /404.html");
                    exit;
            }
        ?>

       

    </section>

    <footer id="footer" class="bg-dark footer" >
       
        <div class="footer-details">
            <a href="https://github.com/Herziox" target="_blank">
            <img src="https://i.imgur.com/rgpLnEz.png" class="img-fluid image-nav"  alt="Responsive image">
            </a>
        
            
        <p>
        Desarrollado por
        </br>Bryan Fernandez 
        </br>Sergio  Jiménez 
        </br>Adrián Laje
        </br>William medina
        </br>
          2020 Métodos Numéricos
        </p>
        </div>

        <div class="footer-details">
        <a href="https://github.com/Herziox/Cuadratura_Gaussiana">
        <img src="https://i.imgur.com/3VAL0Cj.png" class="img-fluid "  alt="Responsive image">
        </a>
        </div>
    </footer>

  
</body>

</html>