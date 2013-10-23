<?php

class PgsqlPdoDriverTest extends BaseTest
{
    public function init()
    {
        $this
            ->setTitle('pgsql PDO Driver')
            ->setExpected('The pgsql (PostgreSQL) PDO driver should be installed.');
    }

    public function run()
    {
        $result    = new TestResult($this);
        $installed = in_array('pgsql', PDO::getAvailableDrivers());

        if ($installed) {
            $result->setFound('The PDO pgsql driver is installed.');
        } else {
            $result->setFound('The PDO pgsql driver is not installed.');
        }

        return $result->setByBoolean($installed);
    }
}
