<?php

class MemoryLimitTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('memory_limit')
            ->setExpected('The php.ini memory_limit should be at least 64MB.');
    }

    public function run()
    {
        $result      = new TestResult($this);
        $sufficient  = 64 <= (int) ini_get('memory_limit');

        $result->setFound('Your memory_limit is set to ' . ini_get('memory_limit') . '.');

        return $result->setByBoolean($sufficient);
    }
}
