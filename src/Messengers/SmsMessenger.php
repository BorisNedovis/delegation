<?php

namespace BorisNedovis\Delegation\src\Messenger;

/**
 * Class SmsMessenger
 *
 * @package BorisNedovis\Delegation\src\Messenger
 */
class SmsMessenger extends AbstractMessenger
{
    /**
     * @return bool
     */
    function send(): bool
    {
        echo "Send by SMS";

        return parent::send();
    }
}