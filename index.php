<?php
require_once('php_to_python.php');
$d  = array('HEY' =>"hey" );
var_dump(ptp('__init__.py',$datas = $d));
?>