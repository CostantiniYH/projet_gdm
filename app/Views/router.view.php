<?php

function afficherVue($titre, $css, $template1, $template2 = null, $template3 = null, $template4 = null, $data = [])
{
    extract($data);
    ob_start();
    require_once dirname(__DIR__) ."/Views/{$template1}.php";

    if ($template2) {
        require dirname(__DIR__) . "/Views/{$template2}.php";
    }
    if ($template3) {
    require dirname(__DIR__) . "/Views/{$template3}.php";}
    if ($template4) {
    require dirname(__DIR__) . "/Views/{$template4}.php";}
    $content = ob_get_clean();
    require_once dirname(__DIR__) . "/Views/partials/layout.php";
}
