<?php

namespace Alyosha\System;


final class View
{
    public static function render(string $path, array $data = [])
    {
        $path = 'resources/views/' . $path . '.php';

        if (!file_exists($path)) {
            throw new \Exception('Данный шаблон не существует');
        }

        extract($data);

        ob_start();
        require_once $path;
        $output = ob_get_contents();
        ob_end_clean();

        echo $output;
    }
}