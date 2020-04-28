<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host".$ENV['DB_HOS'].";dbname".$_ENV['DB_DATABASE'],
    'username' => 'root',
    'password' => $ENV['DB_PASSWORD'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
