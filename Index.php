<?php
$conexion=mysqli_connect('localhost','root','','Ips');
?>


<DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="materialize/css/materialize.css" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>


<body id="caja" class="scrollspy">
  <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">El Usuario</a></li>
      <li class="divider"></li>
      <li><a href="#!">Usuario 1</a></li>
      <li class="divider"></li>
      <li><a href="#!">Usuario 2</a></li>
      <li class="divider"></li>
      <li><a href="#!">Usuaio 3</a></li>
  </ul>
  
    <div class="navbar-fixed">
   <nav>
        <div class="nav-wrapper teal lighten-2">
            <div class="container">
                <a href="#" class="brand-logo">Tsubasa</a>
                <a href="someting.html" data-target="MeHam" class="sidenav-trigger">
                   <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="Catego.html">Categorias</a></li>
                    <li><a href="PostU.html">Mis Post</a></li>
                    <li><a href="PostU.html">Usuarios</a></li>
                    <li><a href="Index-!.html">Salir</a></li>
                    <a href="#Pop" class="brand-logo modal-trigger"><i class="material-icons">add center</i></a>
                </ul>
            
               <div id="Pop" class="modal">
                    <div class="modal-content">
                        <div class="container">
                            <div class="row">
                                <textarea name="editor1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn modal-close left red">cancelar</a>
                        <a href="" class="btn modal-close right">comentar</a>
                    </div>
                </div>
            
            </div>
        </div>
       
    </nav>
    </div>
    
    <ul class="sidenav" id="MeHam">
        <li><a href="IT´s a JOKE">Usuarios</a></li>
        <li><a href="#Search">Post por usuarios</a></li>          
        <li><a href="#popular">Categorias</a></li>
        <a href="#!" class="brand-logo"><i class="material-icons">add center</i></a>
    </ul>
    
    <div class="">
        <div class="">
            <table>
                <thead>
                  <tr>
                      <th>Ip</th>
                      <th>Servicio</th>
                      <th>Puerto</th>
                  </tr>
                </thead>
        <?php
        $sql="SELECT *from Ipss";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){

        ?>
                <tbody>
                  <tr>
                    <td><?php echo $mostrar['Ipss']?></td>
                    <td><?php echo $mostrar['Servicio']?></td>
                    <td><?php echo $mostrar['Puerto']?></td>
                  </tr>
                </tbody>

         <?php
            }    
         ?>
            
         </table>
            
        </div>
    </div>
    
    
    <script src="materialize/js/materialize.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function(){M.AutoInit();}); </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>$(document).ready(function(){$('input.autocomplete').autocomplete({data: {"angular": null,"beto": null,"casa":'https://placehold.it/250x250'},});});</script>
    <script> $('.slider').slider({indicators: false, height: 500,transition: 500,interval: 6000}); </script>
</body>