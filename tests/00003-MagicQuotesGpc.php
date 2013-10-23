<?php

class MagicQuotesGpcTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('magic_quotes_gpc')
            ->setExpected('The php.ini directive magic_quotes_gpc should be turned off.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $activated = ini_get('magic_quotes_gpc');

        if ($activated) {
            $result->setFound('magic_quotes_gpc is on.');
        } else {
            $result->setFound('magic_quotes_gpc is off.');
        }

        return $result
            ->setByBoolean(!$activated);
    }
}
