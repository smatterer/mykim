<?php
//开发环境
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
//生产环境
//defined('YII_ENV') or define('YII_ENV', 'prod');


//require(__DIR__ . '/../common/helper/function.php');//自定义函数文件

// 定义网站根目录
//define('ROOT_PATH',dirname(__FILE__));
//define('DS', DIRECTORY_SEPARATOR);// 定义WIN和Linux操作系统分隔符


//公共web下路径配置
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../common/config/bootstrap.php');
require(__DIR__ . '/../mobileend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../common/config/main.php'),
    require(__DIR__ . '/../common/config/main-local.php'),
    require(__DIR__ . '/../mobileend/config/main.php'),
    require(__DIR__ . '/../mobileend/config/main-local.php')
);


(new yii\web\Application($config))->run();




