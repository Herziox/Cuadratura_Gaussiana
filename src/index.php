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
    <title>Cuadratura Gaussiana</title>

</head>
    
<body>
    <header class="">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
        
        <a class="navbar-brand btn-outline-success" href="#"> <img src="https://i.imgur.com/c1VjDtt.png" class="img-fluid image-nav"  alt="Responsive image"> Cuadratura Gaussiana </a>
            
        <a class="navbar-brand btn-outline-success" href="#ingresarDatos">Ingresar Datos</a>
            <button class="navbar-toggler" type="button" >
                <span ></span>
            </button>
        <a class="navbar-brand btn-outline-success" href="#resultados">Tabla de valores</a>
        <button class="navbar-toggler" type="button" >
            <span ></span>
        </button>
        <a class="navbar-brand btn-outline-success" href="#resultados">Resultados</a>
        <button class="navbar-toggler" type="button" >
            <span ></span>
        </button>
            
        </nav>
    </header>
    <div class="title">
            <h1>Cuadratura Gaussiana</h1>
     </div>
    <section class="datos-details">
       
        <div class="form-all">
            <h4 class="centrar-texto texto-blancho">INGRESO DE DATOS</h4>
            <form class="formulario" action="Cuadratura_Gaussiana.php" method="post">
            <div class="flexbox">
                <div class="recuadro">
                    <label for="validationDefault02" >Limite Inferior</label>
                    <input type="number" class="form-control" name="a" id="a" placeholder="Por ejemplo: 0" value="-1"
                        step="0.0000001">
                    <input type="button" value="π" onclick="colocarPiA() " class="btn btn-primary"/>
                </div>

                <div class="recuadro">
                    <label for="validationDefault02"> Limite superior</label>
                    <input type="number" class="form-control" name="b" id="b" placeholder="Por ejemplo: 2*π" value="1"
                        step="0.0000001" />
                    <input type="button" value="π" onclick="colocarPiB()" class="btn btn-primary"  />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
            
                <label for="validationDefault02"> Número de subintervalos</label>
                <input class="form-control"  type="number" name="n" id="n" placeholder="Por ejemplo: 15" value="7">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                <label for="validationDefault02">Función <br> <span
                            style="color:red;font-size:2rem;">*</span> f(x) =
                    </label>
                    <input class="form-control"  type="text" name="funcion" id="funcion" placeholder="x^2 + 2x + 1" value="x">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                <label for="validationDefault02">Tolerancia</label>
                    <input class="form-control"  type="number" name="tol" id="tol" placeholder="0.00001" step="0.0000000001" value="0.1">
                </div>
            </div>

            <div class="flexbox">
            <input class="btn btn-primary"  class="centrar boton" type="submit" value="Calcular" id="btnA" name="btnA" />
                </div> 

               

            </form>
        </div>
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