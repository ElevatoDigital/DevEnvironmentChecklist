<?php

require_once __DIR__ . '/lib/render.php';
require_once __DIR__ . '/lib/tests.php';

$tests   = testsLoadAll();
$results = array();

foreach ($tests as $test) {
    $results[] = $test->run();
}

echo renderTemplate(
    'index.php',
    array(
        'results' => $results
    )
);
