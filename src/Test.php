<?php

declare(strict_types=1);

namespace Test;

use Test\Other\MyClass;

class Test
{
    private $unusedPrivateVariable;

    /**
     * @param null $unusedParam
     * @return int
     */
    public function foo($unusedParam = null)
    {
        $unusedVariable = array(1, 2, 3);
        return $this->fakeHandler('string');
    }

    private function fakeHandler($string)
    {
        return $string;
    }
}
