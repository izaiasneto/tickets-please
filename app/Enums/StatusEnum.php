<?php

namespace App\Enums;

enum StatusEnum: string
{
    case ATIVO = 'A';
    case COMPLETED = 'C';
    case HOLD = 'H';
    case CANCELED = 'X';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

