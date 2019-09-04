<?php

namespace BorisNedovis\Delegation\src\Messenger;


/**
 * Class EmailMessenger
 *
 * @package BorisNedovis\Delegation\src\Messenger\EmailMessenger
 */
class EmailMessenger extends AbstractMessenger
{

  function send(): bool
  {
      echo "Send by EMAIL";

      return parent::send();
  }
}