<?php
class View
{
   public function render(string $layout, array $data)
   {
      ob_start(); //バッファをオンにして出力をせず一時保存する
      extract($data);
      include "pg_header.php";
      include "{$layout}.php";
      include "pg_footer.php";
      ob_end_flush(); //アクティブな出力用バッファをフラッシュ(まとめて出力)する
   }
   public function redirect(string $url)
   {
      header("Location:{$url}");
   }
}

class UserView extends View {}
