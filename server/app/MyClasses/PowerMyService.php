<?php

namespace App\MyClasses;

class PowerMyService implements MyServiceInterface
{
  private $id = 1;
  private $msg = 'no id ...';
  private $data = ['イチゴ','ばなな','りんご','みかん','ぶどう'];

  function __construct()
  {
    $this->setId(rand(0, count($this->data)));
  }

  public function setId($id)
  {
    if ($id >= 0 && $id < count($this->data))
    {
      $this->id = $id;
      $this->msg = "あなたが好きなのは" . $id . "番の" . $this->data[$id] . "ですね！";
    }
  }

  public function say()
  {
    return $this->msg;
  }

  public function data(int $id)
  {
    return $this->id;
  }

  public function allData()
  {
    return $this->data;
  }

}