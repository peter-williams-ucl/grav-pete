<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/sidshekhar/Documents/pete-archive/archive-grav/user/config/plugins/email.yaml',
    'modified' => 1495019467,
    'data' => [
        'enabled' => true,
        'from' => 'sidshekhar27@gmail.com',
        'to' => 'peter.williams@ucl.ac.uk',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
