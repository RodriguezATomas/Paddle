<?php
// Iniciamos la sesión
session_start();

if(isset($_SESSION['usuario_profesor'])) {
//isset=  es una función que se utiliza para comprobar si una variable está definida y si tiene un valor asignado.
//Es una función útil para verificar la existencia y el valor de las variables en PHP, lo que permite tomar decisiones basadas en esa información durante la ejecución de un script.
}else{ 
   // header(location:"login.php");
}



?>


<html>
    <head>
        <title>Paddle</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
  body{
     
    background-size: cover;
    background-repeat: no-repeat;

  }       

/*NAV*/  
  nav{
    background-color:black;
    height:45px;
    padding-top: 10px;
  }

  nav a{
    color:white;
  }


/*FOOTER*/ 
  footer{
  background-color:black;
  }

  footer h2{
    color:white;
    text-align:center;
    font-size:25px;
  }
  
  footer ul{
    text-align:center;
    font-size:20px;
    list-style-type:none;
    display:inline;
  }

  footer ul a{
    text-decoration:none;
    color:white
  }
  
        </style>
    </head>
    <body bgcolor="grey">
        
    <header>
    <nav <ul class="nav justify-content-center  ">
        
        <li class="nav-item">
            <a class="nav-link" href="secciones/socios">Socios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="secciones/profesores-usuario">Profesores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="secciones/clases-canchas">Clases</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="secciones/clasesTomadas">Reservas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="secciones/productos">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
        </li>
    </ul>
       
    </nav>

    </header>
    <main>
<br>
      <div class="text-center">
      <h1 class="display-3">Bienvenido</h1>
      <h2 class="display-5">Pagina principal</h2>
      </div>
      <br><br>
      </main>
      <br><br><br><br><br><br><br><br>
      <footer>
<br>
    <h2>REDES</h2>
    <ul>
    <a href="https://www.twitter.com/"><li>Twitter</li></a><br>
    <a href="https://www.instagram.com/"><li>Instagram</li></a><br>
    <a href="https://www.facebook.com/"><li>Facebook</li></a>
  </ul>
<br>  

  </footer>
      </body>
</html>
  
