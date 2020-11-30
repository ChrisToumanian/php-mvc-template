<?php
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../app'));
const DS = DIRECTORY_SEPARATOR;

// Include config
require APPLICATION_PATH . DS . 'config' . DS . 'config.php';

// index.php?page=main
$page = get('page','home');
$model = $config['MODEL_PATH'] . $page . '.php';
$view = $config['VIEW_PATH'] . $page . '.phtml';
$_404 = $config['VIEW_PATH'] . '404.phtml';

// load model
if (file_exists($model))
{
    require $model;
}

// load view, else 404
if (file_exists($view))
{
    require $view;
}
else
{
    require $_404;
}