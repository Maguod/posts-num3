<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please View the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions;

class EndsWithException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must end with ({{endValue}})',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not end with ({{endValue}})',
        ],
    ];
}
