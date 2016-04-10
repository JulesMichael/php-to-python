<?php
header('Content-Type: application/json');
function php_to_python($script_name,$debug = 'no'){
    if (empty($_POST)){
        $_POST = array('container' => 'null');
    }
    
    if (empty($_GET)){
        $_GET = array('container' => 'null');
    }
    $_POST = addslashes(json_encode($_POST));
    $_GET  = addslashes(json_encode($_GET));
    $command = 'python '.$script_name.' '.$_POST.' '.$_GET. ' ' . $debug;
    $output = shell_exec($command);
    return $output; 
}





?>