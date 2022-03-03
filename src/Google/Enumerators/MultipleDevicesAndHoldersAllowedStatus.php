<?php

namespace Chiiya\Passes\Google\Enumerators;

use Chiiya\Passes\Common\LegacyValueEnumerator;

final class MultipleDevicesAndHoldersAllowedStatus implements LegacyValueEnumerator
{
    public const STATUS_UNSPECIFIED = 'STATUS_UNSPECIFIED';

    public const MULTIPLE_HOLDERS = 'MULTIPLE_HOLDERS';

    public const ONE_USER_ALL_DEVICES = 'ONE_USER_ALL_DEVICES';

    public const ONE_USER_ONE_DEVICE = 'ONE_USER_ONE_DEVICE';

    public function mapLegacyValues(string $value): string
    {
        return str_replace([
            'multipleHolders',
            'oneUserAllDevices',
            'oneUserOneDevice',
        ], [self::MULTIPLE_HOLDERS, self::ONE_USER_ALL_DEVICES, self::ONE_USER_ONE_DEVICE], $value);
    }

    public static function values(): array
    {
        return [
            self::STATUS_UNSPECIFIED,
            self::MULTIPLE_HOLDERS,
            self::ONE_USER_ALL_DEVICES,
            self::ONE_USER_ONE_DEVICE,
        ];
    }
}
