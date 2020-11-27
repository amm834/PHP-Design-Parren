<?php
namespace App\Staragry;
class User
{
  
  public function __construct()
  {
    $obj = new SMSNotify;
    $obj->send();
  }
}