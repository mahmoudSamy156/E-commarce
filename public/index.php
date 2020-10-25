<?php


use App\Process\Authentication;
use App\Process\FrontControl;
use App\Process\SessionManger;
use App\Process\Template;

require_once '..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';

require_once PATH_PROCESS.'autoloading.php';

$template =require_once TEMPLATE_PATH;
$session = new SessionManger();
$authentication  = Authentication::getInctance($session);
$template   = new Template($template);

session_start();
$Front = new FrontControl($template,$authentication);

$Front->dispatch();
