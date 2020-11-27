<?php

namespace App\Staragry;

class SMSUser extends Notifier
{
  
  public function __construct()
  {
    $this->notify = new SMSNotify();
  }
}