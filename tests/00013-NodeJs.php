<?php

class NodeJsTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('Node.js')
            ->setExpected('Node.js and NPM should be installed and in your system path.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $location  = $this->execWhichWithPathFix('node');
        $installed = ('' !== $location);

        if ($installed) {
            $result->setFound('node was found at ' . $location . '.');
        } else {
            $result->setFound('node was not found.');
        }

        return $result->setByBoolean($installed);
    }
}
