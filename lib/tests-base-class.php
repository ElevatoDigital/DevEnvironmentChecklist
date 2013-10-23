<?php

abstract class BaseTest
{
    protected $title;

    protected $expected;

    public function __construct()
    {
        $this->init();

        if (!$this->title || !$this->expected) {
            throw new Exception(
                "You must set the title and expected result in your test's init() method."
            );
        }
    }

    abstract public function init();

    abstract public function run();

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setExpected($expected)
    {
        $this->expected = $expected;

        return $this;
    }

    public function getExpected()
    {
        return $this->expected;
    }

    public function execWhichWithPathFix($cmd)
    {
        $fullCmd = 'which ' . $cmd;

        if (file_exists('/usr/local/bin') && false === strpos(shell_exec('echo $PATH'), '/usr/local/bin')) {
            $fullCmd = 'PATH=$PATH:/usr/local/bin ' . $fullCmd;
        }

        return trim(shell_exec($fullCmd));
    }
}
