<?php
$uri = $_SERVER["REQUEST_URI"];
$uri = explode("?", $uri);
$_SESSION["login"] = false;
switch ($uri[0]) {
    case "/":
        if (($_SESSION["login"])) {
            header("Location: /dashboard");
            break;
        }
        else {
            header("Location: /login");
            break;
        }
    case "/login":
        include "pages/auth/login.php";
        break;
    case "/dashboard":
        include "pages/dashboard/index.php";
        break;
    case "/menu":
        include "pages/menu/index.php";
        break;
    case "/menu/create":
        include "pages/menu/create.php";
        break;
    case "/menu/edit":
        include "pages/menu/edit.php";
        break;
    case "/menu/delete":
        include "pages/menu/index.php";
        break;
    case "/kasir":
        include "pages/kasir/index.php";
        break;
    case "/kasir/cetak":
        include "pages/kasir/cetak.php";
        break;
    case "/kasir/detail":
        include "pages/kasir/detail.php";
        break;
    case "/laporan":
        include "pages/laporan/index.php";
        break;
    case "/freshdb":
        include "freshdb/index.php";
        break;
    default:
        include "pages/404.php";
}