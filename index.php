<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php

  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost:8889;","root","mysql");
  $stmt = $pdo->query("select * from keijiban");

  ?>
  <header>
      <img src="4eachblog_logo.jpg">
      <div class="menu">
        <ul>
          <li>トップ</li>
          <li>プロフィール</li>
          <li>4eachについて</li>
          <li>登録フォーム</li>
          <li>問い合わせ</li>
          <li>その他</li>
        </ul>
      </div>
    </header>

<main>
<div class="left">
<h1>プログラミングに役立つ書籍</h1>

<form method="post" action="insert.php">
  <h2>入力フォーム</h2>
  <div class="form">
  <label>ハンドルネーム</label>
  <br>
  <input type="text" name="handlename" size="45" style="height:2em">
  </div>

  <div class="form">
    <label>タイトル</label>
      <br>
      <input type="text" name="title" size="45" style="height:2em">
  </div>

  <div class="form">
    <label>コメント</label>
    <br>
    <textarea name="comments" rows="9" cols="70"></textarea>
  </div>

  <div>
    <input type="submit" class="submit" value="投稿する">
  </div>
</form>


<?php

    while($row = $stmt->fetch()){

        echo "<div class='section'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
    }
?>
</div>

  <div class="right">
    <h2>人気の記事</h2>
       <ul>
         <li>PHPオススメ本</li>
         <li>PHP MyAdminの使い方</li>
         <li>今人気のエディタ　Top5</li>
         <li>HTMLの基礎</li>
       </ul>
    <h2>オススメリンク</h2>
       <ul>
         <li>インターノウス株式会社</li>
         <li>XMAPPのダウンロード</li>
         <li>Eclipseのダウンロード</li>
         <li>Bracketsのダウンロード</li>
       </ul>
       <h2>カテゴリ</h2>
       <ul>
         <li>HTML</li>
         <li>PHP</li>
         <li>MySQL</li>
         <li>JavaScript</li>
       </ul>
    </div>
</main>

<footer>
  copyright©️internous | 4each blog the which provides A to Z about progrmming
</footer>

    </body>
</html>
