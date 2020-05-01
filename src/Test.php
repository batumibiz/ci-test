<?php

declare(strict_types=1);

namespace Test;

use Test\Other\MyClass;

class Test
{
    private $unusedPrivateVariable;

    /**
     * @param null $string
     * @return string
     */
    public function foo($string = null)
    {
        $var = array(1, 2, 3);
        return '';
    }
}
