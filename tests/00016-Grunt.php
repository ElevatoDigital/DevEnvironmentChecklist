<?php

class GruntTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('grunt')
            ->setExpected('grunt should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('grunt');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('grunt was found at ' . $location . '.');
        } else {
            $result->setFound('grunt was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
