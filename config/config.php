<?php

/**
 * Bono App Configuration
 *
 * @category  PHP_Framework
 * @package   Bono
 * @author    Ganesha <reekoheek@gmail.com>
 * @copyright 2013 PT Sagara Xinix Solusitama
 * @license   https://raw.github.com/xinix-technology/bono/master/LICENSE MIT
 * @version   0.10.0
 * @link      http://xinix.co.id/products/bono
 */

use Norm\Schema\String;
use Norm\Schema\Password;

return array(
    'application' => array(
        'title' => 'MHA',
        'subtitle' => 'One great application'
    ),
    'bono.salt' => 'please change this',
    'bono.providers' => array(
        '\\Norm\\Provider\\NormProvider' => array(
            'datasources' => array(
                'mysql' => array(
                    'driver' => '\\Norm\\Connection\\PDOConnection',
                    'prefix' => 'mysql',
                    'dbname' => 'mha',                    
                    'username' => 'root',
                    'password' => 'password'
                    
                ),
            ),           
          'collections' => array(
                'resolvers' => array(
                    'Norm\\Resolver\\CollectionResolver',
                ),
            ),
        ),                    

        '\\Xinix\\Migrate\\Provider\\MigrateProvider' => array(
            // 'token' => 'changetokenherebeforeenable',
        ),
        '\\App\\Provider\\AppProvider',
        
    ),
    'bono.middlewares' => array(
        '\\Bono\\Middleware\\StaticPageMiddleware' => null,
        '\\Bono\\Middleware\\ControllerMiddleware' => array(
            'default' => '\\Norm\\Controller\\NormController',
            'mapping' => array(
                '/user' => null,
                '/role'=> null,
                '/report'=> '\\App\\Controller\\ReportController',
                '/about'=> null,
                '/menstruation'=> null,
            ),
        ),
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware' => array(
            'extensions' => array(
                'json' => 'application/json',
            ),
            'views' => array(
                'application/json' => '\\Bono\\View\\JsonView',
            ),
        ),

        // uncomment below to enable auth
        '\\ROH\\BonoAuth\\Middleware\\AuthMiddleware' => array(
            'driver' => '\\ROH\\BonoAuth\\Driver\\NormAuth',
        ),
        '\\Bono\\Middleware\\NotificationMiddleware' => null,
        '\\Bono\\Middleware\\SessionMiddleware' => null,
    ),
    // 'bono.theme' => array(
    //     'class' => '\\Xinix\\Theme\\NakedTheme',
    //     'overwrite' => true,
    // ),

    'bono.theme' => array(
        'class' => '\\ROH\\Theme\\BootstrapTheme',
        'overwrite' => true,
        'options' => array(
            'title' => 'MHA',
        ),
    ),
);
