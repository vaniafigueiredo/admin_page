<?php
error_reporting(E_ALL);
include('includes/header.php');
include('includes/menu.php');

$page = (isset($_REQUEST['page']) ? $_REQUEST['page'] : 'index');

switch ($page) {

    case "index":
    default:
        include('pages/index.php');
        break;

    case "profile":
        include('pages/profile.php');
        break;

    case "consultants":
        include('pages/consultants.php');
        break;

    case "projects":
        include('pages/projects.php');
        break;

    case "companies":
        include('pages/companies.php');
        break;

    case "form":
        include('form/projects.php');
        break;

    case "overview":
        include('pages/overview.php');
        break;
}
//Something here Vania
include('includes/footer.php');

//Hello Im in (Ruud)
//Hello Im in (Classen)
//Im here GUYSSSS
//T'm in (tariq)
//I'm in here for the project