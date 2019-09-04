<?php

namespace BorisNedovis\Delegation;

use BorisNedovis\Delegation\src\Interfaces\MessengerInterface;

use BorisNedovis\Delegation\src\Messenger\EmailMessenger;
use BorisNedovis\Delegation\src\Messenger\SmsMessenger;

/**
 * Class AppMessenger
 * @package BorisNedovis\Delegation
 */
class AppMessenger implements MessengerInterface
{

    /**
     * @var MessengerInterface
     */
    private $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    /**
     * @return $this
     */
    public function toEmail()
    {
        $this->messenger = New EmailMessenger();

        return $this;
    }

    /**
     * @return $this
     */
    public function toSms()
    {
        $this->messenger = New SmsMessenger();

        return $this;
    }

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
    public function setSender($value): MessengerInterface
    {
       $this->messenger->setSender($value);

       return
           $this->messenger;
    }

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
    public function setRecipient($value): MessengerInterface
    {
        $this->messenger->setRecipient($value);

        return
            $this->messenger;
    }

    /**
     * @param string $value
     *
     * @return MessengerInterface
     */
    public function setMessage($value): MessengerInterface
    {
        $this->messenger->setMessage($value);

        return
            $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}