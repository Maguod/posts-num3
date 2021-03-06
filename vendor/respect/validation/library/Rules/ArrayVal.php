<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please View the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules;

class ArrayVal extends AbstractRule
{
    public function validate($input)
    {
        return is_array($input) || $input instanceof \ArrayAccess;
    }
}
