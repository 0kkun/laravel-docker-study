<?php
namespace App\MyClasses;

class MyService
{
  private $msg;
  private $data;

  public function __construct()
  {
    $this->msg = 'This is MyService Message!';
    $this->data = ['hello','welcome','bye'];
  }

  public function say()
  {
    return $this->msg;
  }

  public function data()
  {
    return $this->data;
  }

}