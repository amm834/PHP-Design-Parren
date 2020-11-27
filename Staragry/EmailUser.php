<?php

namespace App\Staragry;

class EmailUser extends Notifier
{
  
  public function __construct()
  {
    $this->notify = new EmailNotify();
  }
}