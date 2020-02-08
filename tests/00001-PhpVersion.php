<?php

class PhpVersionTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('PHP Version')
            ->setExpected('Your PHP installation should be version 7.0 or later.');
    }

    public function run()
    {
        $result = new TestResult($this);

        return $result
            ->setFound('You are running PHP version ' . PHP_VERSION . '.')
            ->setByBoolean(version_compare(PHP_VERSION, '7.0.0'));
    }
}
