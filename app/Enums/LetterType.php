<?php

namespace App\Enums;

enum LetterType
{
    case INCOMING;
    case OUTGOING;
    case SERVICES;
    case INVITE;

    public function type(): string
    {
        return match ($this) {
            self::INCOMING => 'incoming',
            self::OUTGOING => 'outgoing',
            self::SERVICES => 'services',
            self::SERVICES => 'invite',
        };
    }
}
