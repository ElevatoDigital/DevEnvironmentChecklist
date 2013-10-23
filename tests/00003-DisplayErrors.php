<?php

class DisplayErrorsTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('display_errors')
            ->setExpected('The php.ini directive display_errors should be turned on.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $activated = ini_get('display_errors');

        if ($activated) {
            $result->setFound('display_errors is on.');
        } else {
            $result->setFound('display_errors is off.');
        }

        return $result
            ->setByBoolean($activated);
    }
}
