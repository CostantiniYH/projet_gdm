<?php

function afficherVue($titre, $template, $data = [], $css)
{
    extract($data);
    ob_start();
    require_once dirname(__DIR__) ."/Views/{$template}.php";
    $content = ob_get_clean();
    require_once dirname(__DIR__) . "/Views/partials/layout.php";
}
