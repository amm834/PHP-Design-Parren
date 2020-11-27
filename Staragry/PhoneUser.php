<?php

namespace App\Staragry;

class PhoneUser extends Notifier
{
  
  public function __construct()
  {
    $this->notify = new PhoneNotify();
  }
}