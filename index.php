<?php

$yii=dirname(__FILE__).'/../../apps/yii1.1.14/framework/yii.php';
$config=dirname(__FILE__).'/protected/frontend/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/protected/ext/bootstrap3');
Yii::createWebApplication($config)->run();

?>