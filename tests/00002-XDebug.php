<?php

class XdebugTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('xdebug')
            ->setExpected('You should have xdebug installed.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $installed = extension_loaded('xdebug');

        if ($installed) {
            $result->setFound('xdebug is installed.');
        } else {
            $result->setFound('xdebug is not installed.');
        }

        return $result
            ->setByBoolean($installed);
    }
}
