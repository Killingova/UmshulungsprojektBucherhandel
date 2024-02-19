<?php
include '.' . DIRECTORY_SEPARATOR . 'logic' . DIRECTORY_SEPARATOR . 'config.php';
include '.' . DIRECTORY_SEPARATOR . 'logic' . DIRECTORY_SEPARATOR . 'router.php';
include '.' . DIRECTORY_SEPARATOR . 'logic' . DIRECTORY_SEPARATOR . 'registerprozess.php';



$config = getConfig();
$pf = $config['general']['templatePath'];
$view = getRoute();
$title = $view['title'];

include $pf . '_header.php';

include $pf . '_seitenheader.php';
include $pf . '_navsuchfeld.php';
include $pf . '_navkategorien.php';


include $view['template'];
include $pf . '_ueberuns.php';


include $pf . '_footer.php';


