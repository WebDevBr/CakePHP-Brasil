<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/plugins/DebugKit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];
