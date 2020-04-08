<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Hello <?= $_SERVER['HTTP_USER_AGENT'] ?>!</p>
<code>
    <?= file_get_contents("http://backend-server:80") ?>
</code>
</body>
</html>
