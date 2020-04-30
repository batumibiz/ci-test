<?php

declare(strict_types=1);

namespace Test;

use Test\Other\MyClass;

class Test
{
    private $unusedPrivateVariable;

    /**
     * @param null $string
     * @return int
     */
    public function foo($string = null)
    {
        $unusedVariable = array(1, 2, 3);
        return $this->fakeHandler('string');
    }

    private function fakeHandler($string)
    {
        return $string;
    }
}
