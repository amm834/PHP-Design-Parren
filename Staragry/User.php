<?php
namespace App\Staragry;
class User
{

  public function __construct($type) {
    $notifier = new Notifier();
    $obj = null;
    switch ($type) {
      case $obj = 'SMS':
        $obj = new SMSNotify();
        break;
      case $obj = 'Email':
        $obj = new EmailNotify();
        break;
      case $obj = 'Phone':
        $obj = new PhoneNotify();
        break;
      default:
        echo 'Only Email,SMS and Phone notify!';
        break;
    }
    $notifier->changeType($obj);
    $notifier->sendIt();
  }
}