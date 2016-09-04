<?php


return [

  'app' => [
      'url' => 'http://localhost',
      'hash'=> [
        'algo'=> PASSWORD_BCRYPT,
        'cost'=> 10
      ]
  ],

  'db' => [
    'driver'=> 'mysql',
    'host'  => '127.0.0.1',
    'name'  => 'defaul',
    'username'=> 'root',
    'password' => 'deathnote',
    'charset'  => 'utf-8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''

  ],

  'auth' => [
    'session'  => 'user_id',
    'remenber' => 'user_r',

  ],

  'mail' =>[
    'smtp_auth'=> true,
    'smtp_secure'=> 'tls',
    'host' => 'smtp.gmail.com',
    'username'=> 'somegmailcuenta@gmail.com',
    'passowrd'=> 'somepassword',
    'port' => 587,
    'html' => true

  ],

  'twig' => [
    'debug' => true
  ],

  'crsf' =>[
    'session' => 'csrf_token'
  ]

];
