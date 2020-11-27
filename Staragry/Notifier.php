<?php
namespace App\Staragry;
abstract class Notifier
{
  protected Notify $notify;
  public function changeType(Notify $noti)
  {
    $this->notify = $noti;
  }
  public  function sendIt(){
    $this->notify->send();
  }
}