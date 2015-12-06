<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Сайт для обміну книгами.">
    <meta name="keywords" content="Бар, буккросинг, Bookcrossing, книги">
    <meta name="author" content="Актив.БАР">
    <title>Буккросинг Бар</title>

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="favicon.png"/>
    <link href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css" rel="stylesheet">
    <style>
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
            color: #333!important;
            font-weight: bold!important;
        }
    </style>
    <script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>
    <script type="text/javascript">
        VK.init({apiId: 5009365, onlyWidgets: true});
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="jumbotron" style="background-color: #009688; padding: 0">
        <div class="row">
            <div class=" col-xs-12 col-lg-8 col-lg-offset-2">
                <img width="100%" src="../../images/jumbo.png">
            </div>
        </div>
    </div>

    <div class="row">
    <hr>
    <footer>
        <p class="pull-right"><a href="#">Піднятись вгору</a></p>
        <p>© 2015 v0.9.5</p>
        <div id="vk_subscribe"></div>
        <div id="vk_subscribe2"></div>
    </footer>
</div>
</div>
<script type="text/javascript">
    VK.Widgets.Subscribe("vk_subscribe", {mode: 2}, -96921760);
    VK.Widgets.Subscribe("vk_subscribe2", {mode: 2}, 99296865);
</script>
</body>
</html>