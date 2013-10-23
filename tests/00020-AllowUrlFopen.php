<?php

class AllowUrlFopenTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('allow_url_fopen')
            ->setExpected('The allow_url_fopen php.ini setting should be enabled.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $activated = ini_get('allow_url_fopen');

        if ($activated) {
            $result->setFound('The allow_url_fopen option is on.');
        } else {
            $result->setFound('The allow_url_fopen option is off.');
        }

        return $result->setByBoolean($activated);
    }
}
