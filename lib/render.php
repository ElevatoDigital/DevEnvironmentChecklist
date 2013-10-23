<?php

define('RENDER_TEMPLATE_PATH', realpath(__DIR__ . '/../templates'));

function renderTemplate($name, array $data)
{
    extract($data);

    ob_start();
    require RENDER_TEMPLATE_PATH . '/' . basename($name);
    $output = ob_get_clean();

    return $output;
}

function renderEscape($input)
{
    return htmlentities($input, ENT_QUOTES, 'utf-8');
}
