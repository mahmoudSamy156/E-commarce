<?php


use App\Process\FrontControl;
use App\Process\Sessions;
use App\Process\Template;

require_once '..'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';

require_once PATH_PROCESS.'autoloading.php';


$template   = new Template();
new Sessions();
session_start();
$Front = new FrontControl($template);

$Front->dispatch();
