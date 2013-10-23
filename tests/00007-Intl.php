<?php

class IntlTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('intl')
            ->setExpected('You should have the intl PECL extension installed.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $installed = extension_loaded('intl');

        if ($installed) {
            $result->setFound('intl is installed.');
        } else {
            $result->setFound('intl is not installed.');
        }

        return $result->setByBoolean($installed);
    }
}
