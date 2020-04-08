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
<button onclick="actionButton()">do something</button>
<code>

</code>
<script>
    function actionButton() {
        fetch('http://localhost:8080/')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                document.getElementsByTagName("code")[0].innerText = JSON.stringify(data)
            });
    }
</script>
</body>
</html>
