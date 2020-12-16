<?php

include_once "includes/autoload.php";
session_start();
$request = $_SERVER['QUERY_STRING'];

switch ($request){
    //get
    case "bienvenido": 
        include_once "App/vistas/bienvenido.php";
        break;

    case "Crear-Usuarios": 
        include_once "App/vistas/crearUsuario.php";
        break;

    case "Crear-Plan-de-Estudios": 
        include_once "App/vistas/crearPlan.php";
        break;

    case "Asignar-Cursos": 
        include_once "App/vistas/asignarCursos.php";
        break;
    //post
    case "login": 
        include_once "App/vistas/loginUsuario.php";
        break;

    case "guardar-Usuario": 
        include_once "App/vistas/crearUsuario.php";
        break;

    default:
        include_once "App/vistas/loginUsuario.php";
        break;
}