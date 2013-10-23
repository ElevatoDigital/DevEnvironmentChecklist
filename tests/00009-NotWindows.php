<?php

class NotWindowsTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('Not Windows')
            ->setExpected('You cannot develop on Windows.');
    }

    public function run()
    {
        $result  = new TestResult($this);
        $windows = (DIRECTORY_SEPARATOR === '\\');

        if ($windows) {
            $result->setFound('You are running Windows.');
        } else {
            $result->setFound('You are running ' . PHP_OS . '.');
        }

        return $result->setByBoolean(!$windows);
    }
}
