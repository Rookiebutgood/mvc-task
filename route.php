<?php

$request = $_SERVER['REQUEST_URI'];
if( ($pos = strpos($request, '?')) !== false) $request = substr($request, 0, $pos);

switch ($request) {
    case '/' :
        include "view/tasksList.php";
        break;
    case '' :
        include "view/tasksList.php";
        break;
    case '/index.php' :
        include "view/tasksList.php";
        break;
    case '/login' :
        include "view/login.php";
        break;
    case '/logout' :
        include "controller/logout.php";
        break;
    case '/edit' :
        include "view/editTask.php";
        break;
    case '/create' :
        include "view/createTask.php";
        break;
    default:
        http_response_code(404);
        break;
}