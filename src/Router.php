<?php

namespace Alyosha;


use Alyosha\Action\User\UserListAction;

class Router
{
    protected static $routes;

    public static function add(
        string $name,
        array $methods,
        string $url,
        string $action
    )
    {
        $pattern = str_replace('/', '\/', $url);
        $pattern = str_replace('?', '\?', $pattern);
        $pattern = ('(' . implode('|', $methods) . ')') . $pattern;
        $pattern = '/' . $pattern . '$/';

        self::$routes[$name] = [
            'pattern' => $pattern,
            'class' => $action
        ];
    }

    public static function match($url)
    {
        foreach (self::$routes as $key => $route)
        {
            if(preg_match($route['pattern'], $_SERVER['REQUEST_METHOD'] . $url))
            {
                $class = new $route['class'];
                $class();

                return true;
            }
        }

        return false;
    }
}