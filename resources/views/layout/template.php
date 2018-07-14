<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= Host::getHost() ?>resources/assets/bootstrap/css/bootstrap.min.css">
    <title>Mini-Curso NIND</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?= $this->content() ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= Host::getHost() ?>resources/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>