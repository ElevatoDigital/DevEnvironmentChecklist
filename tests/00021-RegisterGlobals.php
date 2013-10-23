<?php

class RegisterGlobalsTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('register_globals')
            ->setExpected('The register_globals php.ini setting should be disabled.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $activated = ini_get('register_globals');

        if ($activated) {
            $result->setFound('The register_globals option is on.');
        } else {
            $result->setFound('The register_globals option is off.');
        }

        return $result->setByBoolean(!$activated);
    }
}
