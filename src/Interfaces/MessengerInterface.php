<?php

namespace BorisNedovis\Delegation\src\Interfaces;

/**
 * Interface MessengerInterface
 *
 * @package BorisNedovis\Delegation\src\Interfaces\MessengerInterface
 */
interface MessengerInterface
{
    /**
     * @param $value string/integer
     * @return mixed
     */
    function setSender($value): MessengerInterface;

    /**
     * @param $value string/integer
     * @return mixed
     */
    function setRecipient($value): MessengerInterface;

    /**
     * @param $value string/integer
     * @return mixed
     */
    function setMessage($value): MessengerInterface;

    /**
     * @return bool
     */
    function send(): bool;
}