<?php

class TestResult
{
    const RESULT_PASSED = true;

    const RESULT_FAILED = false;

    private $test;

    private $result;

    public function __construct(BaseTest $test)
    {
        $this->test = $test;
    }

    public function setFound($found)
    {
        $this->found = $found;

        return $this;
    }

    public function setByBoolean($boolean)
    {
        $this->result = (boolean) $boolean;

        return $this;
    }

    public function render()
    {
        return renderTemplate(
            'result.php',
            array(
                'result'   => $this->result,
                'title'    => $this->test->getTitle(),
                'expected' => $this->test->getExpected(),
                'found'    => $this->found
            )
        );
    }
}
