<?php

namespace App\Provider;

use Norm\Norm;
use App\Helper\RoleHelper;

class LoginProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;

        $app->filter('auth.authorize', function ($options) use ($app) {
            if (is_bool($options)) {
                return $options;
            }

            $pathInfo = $app->request->getPathInfo() ?: '/';
            $getPrivilege = RoleHelper::getAvailableUri();

            foreach ($getPrivilege as $key => $value) {
                if (RoleHelper::checkAccess($value, $pathInfo) && isset($_SESSION['user'])) {
                    return true;
                }
            }

            return $options;
        });

        $app->filter('auth.authorize', function ($options) use ($app) {
            if (is_bool($options)) {
                return $options;
            }

            $pathInfo = $app->request->getPathInfo() ?: '/';
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

            if (!is_null($user)) {
                $defaultUri = RoleHelper::getDefaultUri();

                foreach ($defaultUri as $key => $value) {
                    if ($value === $pathInfo) {
                        return true;
                    }
                }
            }

            return $options;
        });

        $app->filter('auth.authorize', function ($options) use ($app) {
            if (is_bool($options)) {
                return $options;
            } else {
                return false;
            }
        });
    }
}
