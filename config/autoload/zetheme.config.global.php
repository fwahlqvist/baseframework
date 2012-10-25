<<<<<<< HEAD
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
=======
<?php
return array(
    'ze_theme' => array(
        'default_theme' => 'ZF2MobileTheme',
        'theme_paths' => array(
            __DIR__ . '/../../themes/'
        ),
        'adapters' => array(
            'ZeTheme\Adapter\Configuration',
        ),
    ),
>>>>>>> dev/master
);