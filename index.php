<?php

require_once 'vendor/autoload.php';
use App\Staragry\User;
use App\Staragry\EmailUser;
use App\Staragry\SMSNotify;
$email = new EmailUser();
$email->changeType(new SMSNotify);
$email->sendIt();