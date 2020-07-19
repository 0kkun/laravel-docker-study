<?php

namespace App\MyClasses;

// インターフェイスは契約。サービスコンテナの結合を、インターフェースを噛ませることで
// 粗な結合状態を作り、結合するクラスを差し替える時に便利になる。コントローラの記述変更がなくなる。
interface MyServiceInterface
{
  public function setId(int $id);
  public function say();
  public function allData();
  public function data(int $data);
}