<?php
$pagina = null;
$action = null;
$rows = null;
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$array = array(
    'home' => '/home',
    'empresa' => '/empresa',
    'produtos' => '/produtos',
    'servicos' => '/servicos',
    'contato' => '/contato'
);


function GetRota($rota)
{
    $s = strlen($rota['path']);
    if($rota['path'] == '/'){
        $rota = '/home';
    }else{
        $letrafinal  = substr($rota['path'],-1);
        if($letrafinal == '/'){
            $rota = substr($rota['path'],0, $s-1);
        }else{
            $rota = $rota['path'];
        }
    }

    return $rota;
}




$action = GetRota($rota);
//echo $action;




if (in_array($action, $array, true)) {
    //echo "<br>A rota $action existe";
    $pagina = 'views'.$action.'.php';
} else {
    //echo "<br>A rota $action nao existe";
    $pagina = 'views/not_found.php';
}


/*
$filename = 'views'.$action.'.php';
if (file_exists($filename)) {
    //echo "<br>$filename existe";
} else {
    //echo "<br>$filename nao existe";
}
*/


function Route() {
    global $pagina;
    global $action;

    $sql = "select * from `paginas` where slug = '". str_replace('/','', $action) ."' limit 1";

    $result = DbOpenConnection()->query( $sql );
    $conteudo = $result->fetch(PDO::FETCH_ASSOC);
    
    require_once($pagina);
}
?>