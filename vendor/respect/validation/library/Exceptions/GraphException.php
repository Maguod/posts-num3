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

class GraphException extends AlphaException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must contain only graphical characters',
            self::EXTRA => '{{name}} must contain only graphical characters and "{{additionalChars}}"',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not contain graphical characters',
            self::EXTRA => '{{name}} must not contain graphical characters or "{{additionalChars}}"',
        ],
    ];
}
