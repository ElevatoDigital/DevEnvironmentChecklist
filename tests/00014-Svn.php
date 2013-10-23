<?php

class SvnTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('Subversion')
            ->setExpected('svn should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('svn');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('svn was found at ' . $location . '.');
        } else {
            $result->setFound('svn was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
