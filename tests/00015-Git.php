<?php

class GitTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('Git')
            ->setExpected('git should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('git');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('git was found at ' . $location . '.');
        } else {
            $result->setFound('git was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
