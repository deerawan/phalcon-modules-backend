<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Ezypickup\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ),
    'backend' => array(
        'className' => 'Ezypickup\Backend\Module',
        'path' => __DIR__ . '/../apps/backend/Module.php'
    )
));
