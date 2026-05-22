<?php
class Model
{
   // データベース接続やCRUD操作 
   // 今回はDBを利用しない前提のため、空のままにする
}

class UserModel extends Model
{
   static $users = [
      ['uid' => 'k24rs901', 'uname' => '田中 太郎', 'sex' => 1, 'urole' => 1],
      ['uid' => 'k24rs902', 'uname' => '鈴木 次郎', 'sex' => 1, 'urole' => 1],
      ['uid' => 'k24rs903', 'uname' => '中村 はるか', 'sex' => 2, 'urole' => 1],
      ['uid' => 'k24rs904', 'uname' => '陳 立', 'sex' => 1, 'urole' => 1],
   ];
   public function getAll()
   {
      return self::$users;
   }

   public function getUser($uid = '')
   {
      foreach (self::$users as $_user) {
         if ($_user['uid'] === $uid) return $_user;
      }
      return ['uid' => '', 'uname' => '', 'sex' => 1, 'urole' => 1];
   }

   public function addUser($user)
   {
      self::$users[] = $user;
      return $this;
   }
}
