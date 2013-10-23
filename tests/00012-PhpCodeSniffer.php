<?php

class PhpCodeSnifferTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('PHP_CodeSniffer')
            ->setExpected('PHP_CodeSniffer should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('phpcs');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('phpcs was found at ' . $location . '.');
        } else {
            $result->setFound('phpcs was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
