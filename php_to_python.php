<?php
function ptp($script_name,$datas = null, $debug = "false",$version = "3")
{
    $command = 'python'.$version.' '.$script_name.' "'.addslashes(json_encode($datas)). '" ' . $debug;
    $output = shell_exec($command);
    $output = json_decode($output);
    return $output; 
}

?>