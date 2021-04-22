<?php
require_once('./config/dbconfig.php');
function route($name){
    echo "?route=".$name;
}


$page = "home"; 
$db = new operations();

if (isset($_GET['route'])) {
    switch ($_GET['route']) {
        case 'del':
            $page = "del"; 
            break;
        case 'edit':
            $page = "edit"; 
            break;
        case 'more':
            $page = "more"; 
            break;
        case 'view':
            $page = "view"; 
            break;
        default:
            $page = "home"; 
            break;
    }
}

include('./layers/app.php');

?>