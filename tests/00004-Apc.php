<?php

class ApcTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('apc or apcu')
            ->setExpected('Either the apc or the apcu PECL extensions should be installed.');
    }

    public function run()
    {
        $result = new TestResult($this);

        $apc  = extension_loaded('apc');
        $acpu = extension_loaded('apcu');

        if ($apc) {
            $result->setFound('apc is installed.');
        } elseif ($apcu) {
            $result->setFound('apcu is installed.');
        } else {
            $result->setFound('Neither apc or apcu is installed.');
        }

        return $result
            ->setByBoolean($apc || $apcu);
    }
}
