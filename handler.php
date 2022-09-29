<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/Vista/Usuario/CrearUsuario.php':
        require '/Vista/Usuario/CrearUsuario.php';
        break;
    case '/pepe':
        require 'pepe.php';
        break;
    case '/Catalogo':
        require 'Catalogo.php';
        break; 
    case '/CatalogoC':
        require 'CatalogoC.php';
        break;
    case '/CatalogoA':
        require 'CatalogoA.php';
        break; 
    case '/index':
        require 'index.php';
        break;
    case '/index1':
        require 'index1.php';
        break;
    case '/indexA':
        require 'indexA.php';
        break;
    case '/CrearCarrito':
        require 'CrearCarrito.php';
        break;
    case '/CrearProducto':
        require 'CrearProducto.php';
        break; 
    case '/CrearUsuario':
        require 'CrearUsuario.php';
        break;
    case '/EditarProducto':
        require 'EditarProducto.php';
        break;  
    case '/VerPedido':
        require 'VerPedido.php';
        break;
    case '/LoginUsuario':
        require 'LoginUsuario.php';
        break;
    case '/home':
        require 'home.php';
        break;
    case '/homeA':
        require 'homeA.php';
        break;
    case '/homeC':
        require 'homeC.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
?>