<?php

class PhpUnitTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('PHPUnit')
            ->setExpected('PHPUnit should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('phpunit');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('phpunit was found at ' . $location . '.');
        } else {
            $result->setFound('phpunit was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
