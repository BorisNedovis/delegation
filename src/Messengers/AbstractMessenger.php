<?php

namespace BorisNedovis\Delegation\src\Messenger;

use BorisNedovis\Delegation\src\Interfaces\MessengerInterface;

/**
 * Class AbstractMessenger
 *
 * @package BorisNedovis\Delegation\src\Messenger\AbstractMessenger
 */
abstract class AbstractMessenger implements MessengerInterface
{

    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
    function setSender($value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
   function setRecipient($value): MessengerInterface
   {
       $this->recipient = $value;

       return $this;
   }

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
   function setMessage($value): MessengerInterface
   {
       $this->message = $value;

       return $this;
   }

    /**
     * @return bool
     */
   function send(): bool
   {
       return true;
   }
}