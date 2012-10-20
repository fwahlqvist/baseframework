<?php
return array(
    'ze_theme' => array(
        'default_theme' => 'defualt',
        'theme_paths' => array(
            __DIR__ . '/../../themes/'
        ),
        'routes'=>array(
        'defualt'=>array('album', 'blog')
        ),
        'adapters' => array(
            'ZeTheme\Adapter\Configuration',
            'ZeTheme\Adapter\Route',
        ),
    ),
);