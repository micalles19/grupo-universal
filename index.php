<?php
$pagina = isset($_GET['page']) ? $_GET['page'] : 'inicio';

require_once './views/header1.php';
$ruta = './views/' . $pagina . '.php';
if (file_exists($ruta)) {
    require_once './views/menu.php';
    if(file_exists('./views/banner-'.$pagina.'.php')){
        require_once './views/banner-'.$pagina.'.php';
    }

    require_once $ruta;
    require_once './views/footer.php';
} else {
    require_once  './views/404-not-found.php';
}


?>