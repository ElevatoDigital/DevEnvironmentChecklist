<?php

class ApacheTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('Apache')
            ->setExpected('You should be running on the Apache web server with mod_php.');
    }

    public function run()
    {
        $result  = new TestResult($this);
        $sapi    = php_sapi_name();
        $apache  = ('apache2handler' === $sapi);

        $result->setFound('Your SAPI is ' . $sapi . '.');

        return $result->setByBoolean($apache);
    }
}
