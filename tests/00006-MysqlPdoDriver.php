<?php

class MysqlPdoDriverTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('mysql PDO Driver')
            ->setExpected('The mysql PDO driver should be installed.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $installed = in_array('mysql', PDO::getAvailableDrivers());

        if ($installed) {
            $result->setFound('The PDO mysql driver is installed.');
        } else {
            $result->setFound('The PDO mysql driver is not installed.');
        }

        return $result->setByBoolean($installed);
    }
}
