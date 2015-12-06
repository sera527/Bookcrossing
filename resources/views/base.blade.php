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
        VK.init({apiId: 5177217, onlyWidgets: true});
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="vk_api_transport"></div>
<script type="text/javascript">
    window.vkAsyncInit = function () {
        VK.init({
            apiId: 5177217
        });
    };

    setTimeout(function () {
        var el = document.createElement("script");
        el.type = "text/javascript";
        el.src = "//vk.com/js/api/openapi.js";
        el.async = true;
        document.getElementById("vk_api_transport").appendChild(el);
    }, 0);
</script>
<div class="container">
    <div class="jumbotron" style="background-color: #009688; padding: 0">
        <div class="row">
            <div class=" col-xs-12 col-lg-8 col-lg-offset-2">
                <img width="100%" src="../../images/jumbo.png">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div style="display: inline" hidden id="login_button" onclick="VK.Auth.login(authInfo);"></div>
            <div  id="logout_button" onclick="VK.Auth.logout(authInfo);"
                 style="width: 119px; display: inline">
                <table cellspacing="0" cellpadding="0" id="openapi_UI_0" onmouseover="VK.UI._change(1, 0);"
                       onmouseout="VK.UI._change(0, 0);" onmousedown="VK.UI._change(2, 0);"
                       onmouseup="VK.UI._change(1, 0);"
                       style="cursor: pointer; border: 0px; font-family: tahoma, arial, verdana, sans-serif, Lucida Sans; font-size: 10px;">
                    <tbody>
                    <tr style="vertical-align: middle">
                        <td>
                            <div style="border: 1px solid #3b6798;border-radius: 2px 0px 0px 2px;-moz-border-radius: 2px 0px 0px 2px;-webkit-border-radius: 2px 0px 0px 2px;">
                                <div style="border-width: 1px; border-style: solid; border-color: rgb(126, 156, 188) rgb(92, 130, 171) rgb(92, 130, 171); color: rgb(255, 255, 255); text-shadow: rgb(69, 104, 142) 0px 1px; height: 15px; padding: 2px 4px 0px 6px; line-height: 13px; background-color: rgb(109, 141, 177);">
                                    Выйти
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="background: url(http://vk.com/images/btns.png) 0px -42px no-repeat; width: 21px; height: 21px"></div>
                        </td>
                        <td>
                            <div style="border: 1px solid rgb(59, 103, 152); border-radius: 0px 2px 2px 0px; background-position: 0px -42px;">
                                <div style="border-width: 1px; border-style: solid; border-color: rgb(126, 156, 188) rgb(92, 130, 171) rgb(92, 130, 171); color: rgb(255, 255, 255); text-shadow: rgb(69, 104, 142) 0px 1px; height: 15px; padding: 2px 6px 0px 4px; line-height: 13px; background-color: rgb(109, 141, 177);">
                                    Контакте
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Put this script tag to the <head> of your page -->
            <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

            <script type="text/javascript">
                VK.init({apiId: 5177217, onlyWidgets: true});
            </script>

            <!-- Put this div tag to the place, where the Like block will be -->
            <div id="vk_like"></div>
            <script type="text/javascript">
                VK.Widgets.Like("vk_like", {type: "button"});
            </script>
        </div>
    </div>

    <div class="row">

        </div>
        <div class="col-lg-3">
            <div style="padding: 5px" id="vk_post_-@yield('post_id')"></div>
            <script type="text/javascript">
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//vk.com/js/api/openapi.js?116";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'vk_openapi_js'));
                (function () {
                    if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post("vk_post_-98669376_4", -98669376, 4, 'dl9-rKUkDGATMgUJZoXF2_9TAHU', {width: 280})) setTimeout(arguments.callee, 50);
                }());
            </script>
            <div style="padding: 5px" id="vk_groups" class="center-block"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {
                    mode: 0,
                    width: "220",
                    height: "400",
                    color1: 'FFFFFF',
                    color2: '2B587A',
                    color3: '5B7FA6'
                }, 96921760);
            </script>
        </div>
    </div>
    <hr>
    <footer>
        <p class="pull-right"><a href="#">Піднятись вгору</a></p>
        <p>© 2015 v0.9.5</p>
        <div id="vk_subscribe"></div>
        <div id="vk_subscribe2"></div>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    VK.init({
        apiId: 5177217
    });

    function authInfo(response) {
        if (response.session) {
            user_id = response.session.mid;
            logIn();
        } else {
            logOut();
        }
    }

    VK.Auth.getLoginStatus(authInfo);
    VK.UI.button('login_button');
    VK.Widgets.Subscribe("vk_subscribe", {mode: 2}, -96921760);
    VK.Widgets.Subscribe("vk_subscribe2", {mode: 2}, 99296865);

    function logIn() {
        $('#main').show('slow');
        $('#login_button').hide();
        $('#logout_button').show();
        $('#vk_like').show();
    }

    function logOut() {
        $('#main').hide('slow');
        $('#logout_button').hide();
        $('#vk_like').hide();
        $('#login_button').show();
    }
</script>
</body>
</html>