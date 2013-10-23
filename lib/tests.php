<?php

require_once __DIR__ . '/tests-base-class.php';
require_once __DIR__ . '/tests-result-class.php';

define('TESTS_PATH', realpath(__DIR__ . '/../tests/'));

function testsLoadAll()
{
    $files = glob(TESTS_PATH . '/*.php');
    $tests = array();

    sort($files);

    foreach ($files as $file) {
        require_once $file;
        $className = preg_replace('/\.php$/', '', substr($file, strrpos($file, '-') + 1)) . 'Test';

        $tests[] = new $className();
    }

    return $tests;
}
