<?php 

require_once "scssphp-0.6.7/scss.inc.php";
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;

$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Compact');
//$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');

$scss->setImportPaths('scssphp-0.6.7');

$server = new Server('scssphp-0.6.7', null, $scss);
$server->serve();

?>