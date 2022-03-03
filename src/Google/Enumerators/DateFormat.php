<?php

namespace Chiiya\Passes\Google\Enumerators;

use Chiiya\Passes\Common\LegacyValueEnumerator;

final class DateFormat implements LegacyValueEnumerator
{
    public const DATE_FORMAT_UNSPECIFIED = 'DATE_FORMAT_UNSPECIFIED';

    public const DATE_TIME = 'DATE_TIME';

    public const DATE_ONLY = 'DATE_ONLY';

    public const TIME_ONLY = 'TIME_ONLY';

    public const DATE_TIME_YEAR = 'DATE_TIME_YEAR';

    public const DATE_YEAR = 'DATE_YEAR';

    public function mapLegacyValues(string $value): string
    {
        return str_replace([
            'dateTime',
            'dateOnly',
            'timeOnly',
            'dateTimeYear',
            'dateYear',
        ], [self::DATE_TIME, self::DATE_ONLY, self::TIME_ONLY, self::DATE_TIME_YEAR, self::DATE_YEAR], $value);
    }

    public static function values(): array
    {
        return [
            self::DATE_FORMAT_UNSPECIFIED,
            self::DATE_TIME,
            self::DATE_ONLY,
            self::TIME_ONLY,
            self::DATE_TIME_YEAR,
            self::DATE_YEAR,
        ];
    }
}
