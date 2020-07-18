<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos</title>
    <link rel="icon" href="../img/icono.ico" />

    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../css/main.css">

    <script src="https://www.geogebra.org/apps/deployggb.js"></script>
</head>

<body>
    <header class="head-page">
        <div class="contenedor">
        </div>
    </header>

    <section class="contenido-header">
        <div class="barra-sup">
            <button onclick="abrir_menu()" style="float: rigth;">
                <img src="https://img.icons8.com/ios/25/000000/menu.png" /> Menú
            </button>
            <div class="centrar-texto">
                <h4>Escuela Politécnica Nacional</h4>
                <h4>Facultad de Sistemas</h4>
            </div>
            <h4>Redes Sociales</h4>
        </div>

        
<!-- Programar por Aquiiiiiiiiiiiii -->
        <div class="cg">
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

                $a = validar($a);
                $b = validar($b);
    
                echo "
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
                ";
    
                $fprint = imprimirFunc($funcion);
                echo "<h2 class='centrar-texto' style='padding: 1rem 0 1rem 0;'>Su función colocada es:<br><span id='formula'>f(x) = $fprint </span><br>en el intervalo [$a , $b]</h2>";
    
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
                $integral_1 = 0;
    
                $j=5;
        
                $fpl = generarPL($j);
                eval('function evaluarPL($x){
                          $h = '.$fpl.';
                          return $h;
                      }');
                      
                include 'functions.php';
    
                $root = raices(-1,1,$n,$tol);
                for ($i=0; $i <= $j ; $i++) {
                    $raiz=$root[$i];
                    echo $raiz."<br>";
                    $pl = derivadaPL($raiz);
                    $w = 2/((1-($raiz**2))*($pl**2));
                    $val = $h*$raiz + ($h+$a);
                    echo "g(x)=".$val."<br>";
                    $integral_1 += $w*$val;
                    
                }
                $integral_1=$integral_1*$h;

                echo "La integral es: $integral_1";
    //FIN - MAIN

            }else{
                    header("Status: 301 Moved Permanently");
                    header("Location: /404.html");
                    exit;
            }
        ?>

        </div>

    </section>


    <section class="menu" id="menu">
        <button onclick="cerrar_menu()" style="float: rigth;flex-basis: 4%;font-size:3rem;background-color:#ccc;cursor: pointer;">X</button>
        <div class="informacion">
            <ul>
                <li>
                    <a href="https://www.nurturedigital.com/work/">
                        Work.
                        <h4>-(and play)</h4>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="https://www.nurturedigital.com/about/">
                        Sobre nosotros.
                        <h4>-Nuestra gente &amp; nuestro propósito.</h4>
                    </a>
                </li>
                <li>
                    <a href="https://www.nurturedigital.com/contact/">
                        Contactanos.
                        <h4>-Nos encantaría escucharte.</h4>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="relacionado">
            <li>
                <h4>Pfister Faucets AR</h4>
                    <p>See our new augmented reality experience unveiled at KBIS 2017 in Orlando! <a
                            href="https://trainrobber.com/journal/post.php?s=2017-01-17-jobbies-filtered-in-striking-3d"
                            title="Pfister Faucets Augmented Reality Experience">Read the article</a></p>
            </li>
            <li>
                <h4>Baldwin 70 Years Bold Gala</h4>
                    <p>It was a privilege to unveil our new Baldwin Evolved video and AR app to architects and designers
                        flown in from around the world at Baldwin’s 70 year anniversary gala. <a
                            href="https://vimeo.com/nurture/review/194634298/cbdb272957"
                            title="Baldwin Gala Video">Experience the night here!</a></p>
            </li>
        </ul>

        </div>
    </section>

    <script src="../js/main.js"></script>
</body>

</html>