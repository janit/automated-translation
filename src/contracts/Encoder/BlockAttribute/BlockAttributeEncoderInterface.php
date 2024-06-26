<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\Contracts\AutomatedTranslation\Encoder\BlockAttribute;

interface BlockAttributeEncoderInterface
{
    public function canEncode(string $type): bool;

    public function canDecode(string $type): bool;

    /**
     * @param mixed $value
     */
    public function encode($value): string;

    public function decode(string $value): string;
}
