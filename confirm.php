<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $body = $_POST["body"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="post.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="body" value="<?php echo $body; ?>">
    <dl>
      <dt>名前</dt>
      <dd><?php echo $name; ?></dd>
      <dt>メールアドレス</dt>
      <dd><?php echo $email; ?></dd>
      <dt>お問い合わせ内容</dt>
      <dd><?php echo $body; ?></dd>
    </dl>
    <button type="button" onclick="history.back()">戻る</button>
    <input type="submit" value="送信">
  </form>
</body>

</html>
