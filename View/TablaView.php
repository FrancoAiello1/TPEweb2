<?php
    class TablaView{
        private $title;

        function __construct(){
            $this->title = "Inventario";
        }

        function ShowHome($inv){

            $html = '<!DOCTYPE html>
            <html lang="en">
            
            <head>
                <script src="js/tabla.js"></script>
            
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->title.'</title>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/fontello.css">
            </head>
            
            <body>
                <header>
                    <a href="index.html">
                        <h1 class="logo"><img src="images/logo.jpg" alt="logo"></h1>
                    </a>
                    <input type="checkbox" id="btn-menu">
                    <label for="btn-menu" class="icon-menu"></label>
                    <nav class="navegacion">
                        <ul class="botonera">
                            <li><a href="index.html">INICIO</a></li>
                            <li><a href="inventario.html">INVENTARIO</a></li>
                            <li><a href="contacto.html">CONTACTO</a></li>
                        </ul>
                    </nav>
                </header>
                <h2 class="subinventario">COMPARACION DE NUESTROS AUTOMOTORES</h2>
                <article>
                    <form>
                        <ul class="formulario">
                            <li>
                                <label>Modelo </label>
                                <div>
                                    <input id="modelo" name="modelo" class="input-inv" value="" />
                                </div>
                            </li>
                            <li>
                                <label>Año </label>
                                <div>
                                    <input id="año" name="año" class="input-inv" value="" />
                                </div>
                            </li>
                            <li>
                                <label>Kilometraje </label>
                                <div>
                                    <input id="kms" name="kms" class="input-inv" value="" />
                                </div>
                            </li>
                            <li>
                                <label>Potencia (cv)</label>
                                <div>
                                    <input id="potencia" name="potencia" class="input-inv" value="" />
                                </div>
                            </li>
                            <li>
                                <label>Peso</label>
                                <div>
                                    <input id="peso" name="peso" class="input-inv" value=""></input>
                                </div>
                            </li>
                            <li>
                                <label>Alarma</label>
                                <div>
                                    <input id="alarma" name="alarma" class="input-inv" value=""></input>
                                </div>
                            </li>                 
                            <li>
                                <label>Consumo</label>
                                <div>
                                    <input id="consumo" name="consumo" class="input-inv" value=""></input>
                                </div>
                            </li> 
                            <li>
                                <div>
                                    <input id="id"></input>
                                </div>
                            </li> 
                    </form>
                </article>
                <div>
                    <button id="agregar_tres">AGREGAR TRES</button>
                    <button  id="agregar_auto">AGREGAR</button>
                    <button id="botonguardar">GUARDAR</button>
                </div>
                <p id="error-tabla-vacia"></p>
                <div class="tabla">
                    <table>
                        <thead>
                            <tr>
                                <td>MODELO</td>
                                <td>AÑO</td>
                                <td>KILOMETRAJE</td>
                                <td>POTENCIA</td>
                                <td>PESO</td>
                                <td>SISTEMA DE ALARMA</td>
                                <td>CONSUMO URBANO</td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            
            </body>
            
            </html>'
        }





    }




?>