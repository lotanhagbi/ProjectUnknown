<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Unknown Project',
    'aliases' => array(
    ),
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'bootstrap.behaviors.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*'
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'hhagbi',
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),
    'defaultController' => 'post',
    // application components
    'components' => array(
        'user' => array(
            'class' => 'WebUser',
            // set default login URL
            'loginUrl'=>array('user/login'),
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=db_unknownproject',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'sjAdcanUyt86vKjS',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
        ),
        /* 'errorHandler'=>array(
          // use 'site/error' action to display errors
          'errorAction'=>'site/error',
          ), */
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
                
                'user/<id:\d+>' => 'user/get',
                'user/<id:\d+>/thumbnail' => 'user/thumbnail',
                
                'project/<id:\d+>' => 'project/get',
                
/*                'post/<id:\d+>' => 'post/test',
//                'post/<id:\d+>/<title:.*?>' => 'post/view',
//                'posts/<tag:.*?>' => 'post/index',
 */
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
//                array(
//                    'class' => 'CWebLogRoute',
//                ),
            ),
        ),
        'bootstrap' => array(
            'class' => 'bootstrap.components.BsApi',
        )
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php'),
);
