<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../img/icono.ico" />

    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../css/main.css">
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
        <div class="contenedor titulos">
            <h1>Cuadratura Gaussiana</h1>
        </div>
        <div class="form-all">
            <h4 class="centrar-texto texto-blancho">INGRESO DE DATOS</h4>
            <form class="formulario" action="Cuadratura_Gaussiana.php" method="post">

                <div class="recuadro">
                    <label for="a">Ingrese a (El limite inferior):</label>
                    <input type="text" class="cuadro" name="a" id="a" placeholder="Por ejemplo: 0" value="-1"
                        step="0.0000001">
                    <input type="button" value="π" onclick="colocarPiA()" />
                </div>

                <div class="recuadro">
                    <label for="b">Ingrese b (El limite superior):</label>
                    <input type="text" class="cuadro" name="b" id="b" placeholder="Por ejemplo: 2*π" value="1"
                        step="0.0000001" />
                    <input type="button" value="π" onclick="colocarPiB()" />
                </div>

                <div class="recuadro">
                    <label for="n">Ingrese n (el número de subintervalos)</label>
                    <input type="number" name="n" id="n" placeholder="Por ejemplo: 15" value="7">
                </div>

                <div class="recuadro">
                    <label for="funcion">Ingrese la función que quiere usar (Considere funciones polinomicas) <br> <span
                            style="color:red;font-size:2rem;">*</span> f(x) =
                    </label>
                    <input type="text" name="funcion" id="funcion" placeholder="x^2 + 2x + 1" value="x">
                </div>

                <div class="recuadro">
                    <label for="tol">Tolerancia</label>
                    <input type="number" name="tol" id="tol" placeholder="0.00001" step="0.0000000001" value="0.1">
                </div>

                <input class="centrar boton" type="submit" value="Enviar" id="btnA" name="btnA" />

            </form>
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