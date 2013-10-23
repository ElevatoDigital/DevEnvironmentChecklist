<?php

class PhingTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('phing')
            ->setExpected('phing should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('phing');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('phing was found at ' . $location . '.');
        } else {
            $result->setFound('phing was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
