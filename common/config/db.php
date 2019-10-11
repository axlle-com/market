<?
use yii\helpers\Url;
    if ($_SERVER['SERVER_ADDR'] == '127.0.0.1')
    {
        return  [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost; dbname=srub',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
        ];
    }else{
        return  [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost; dbname=srubstroi_srtroi',
            'username' => 'srubstroi_srtroi',
            'password' => '1EM*&w@1',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
        ];
    }
