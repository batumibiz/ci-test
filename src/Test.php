<?php

declare(strict_types=1);

namespace Test;

use Test\Other\MyClass;

class Test
{
    private $unusedPrivateVariable;

    /**
     * Ошибка типов
     *
     * @return string
     */
    public function foo()
    {
        $var = array(1, 2, 3);
        return false;
    }
}
