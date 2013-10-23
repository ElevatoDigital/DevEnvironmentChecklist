<?php

class GdTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('gd')
            ->setExpected('The gd extension should be installed.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $installed = extension_loaded('gd');

        if ($installed) {
            $result->setFound('The gd extension is installed.');
        } else {
            $result->setFound('The gd extension is not installed.');
        }

        return $result->setByBoolean($installed);
    }
}
