<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\Contracts\AutomatedTranslation\Client;

interface ClientInterface
{
    /**
     * @param array{array-key, string} $configuration
     */
    public function setConfiguration(array $configuration): void;

    public function translate(string $payload, ?string $from, string $to): string;

    public function supportsLanguage(string $languageCode): bool;

    /**
     * Use as key.
     */
    public function getServiceAlias(): string;

    /**
     * Use for Human.
     */
    public function getServiceFullName(): string;
}
