<?php

namespace App\Provider;

class AppProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;


        $this->app->post(
            '/login',
            function () use ($app) {
                $post = $app->request->post();
            }
        );
        // do something here
    }
}
