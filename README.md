## MVCモデルをデモするミニサンプル

### 使い方
1. リポジトリをPC上WebサーバーのDocumentRoot以下にダウンロード・解凍、もしくは、クローンする
2. Webサーバー（with PHP）を起動する
3. ブラウザ上でページを開く（http://localhost/mini-mvc/index.php）

**出力結果（HTMLソース）**
```html
<!DOCTYPE html> 
<html><head>
<meta http-equiv="Content-TYPE" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>MVC Sample</title>
</head>
<body>
<div class="container">
<h3>ユーザアカウント一覧</h3>
<table border=1>
 <tr><th>ユーザID</th><th>氏名</th><th>ユーザ種別</th></tr> 
 <tr><td>k24rs901</td><td>田中 太郎</td><td>1</td></tr> 
 <tr><td>k24rs902</td><td>鈴木 次郎</td><td>1</td></tr> 
 <tr><td>k24rs903</td><td>中村 はるか</td><td>1</td></tr>
 <tr><td>k24rs904</td><td>陳 立</td><td>1</td></tr>
</table>
</div>
</body>
</html>
```
