<?php

class ImagickTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('imagick')
            ->setExpected('The imagick PECL extension should be installed.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $installed = extension_loaded('imagick');

        if ($installed) {
            $result->setFound('The imagick extension is installed.');
        } else {
            $result->setFound('The imagick extension is not installed.');
        }

        return $result->setByBoolean($installed);
    }
}
