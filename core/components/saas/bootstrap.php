<?php
/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */

// Include autoloader generated by your composer
require_once $namespace['path'] . 'vendor/autoload.php';

if (!$modx->services->has('saas')) {
    // Register base class in the service container
    $modx->services->add('saas', function($c) use ($modx) {
        return new \SaaS\Service($modx);
    });

    // Load packages model, uncomment if you have DB tables
    //$modx->addPackage('SaaS\Model', $namespace['path'] . 'src/', null, 'SaaS\\');
}

// More about this file: https://docs.modx.com/3.x/en/extending-modx/namespaces#bootstrapping-services
