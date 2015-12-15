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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/css/ripples.min.css" rel="stylesheet">
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
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NF6RMN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NF6RMN');</script>
<!-- End Google Tag Manager -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-65856084-2', 'auto');
    ga('send', 'pageview');

</script>
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

        <div id="main" style="background-color: #eee; color: #333" class="col-lg-9 navbar navbar-default" hidden>

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Вільні книжки</a></li>
                            <li><a href="#about">Додати книгу</a></li>
                            <li><a href="#contact">Сповіщення</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Мій кабінет<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Взята книга</a></li>
                                    <li><a href="#">Віддані</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Історія книгооберту</a></li>
                            <li><a href="https://uk.wikipedia.org/wiki/%D0%91%D1%83%D0%BA%D0%BA%D1%80%D0%BE%D1%81%D0%B8%D0%BD%D0%B3">Що
                                    таке буккросинг?</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>


            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                    @yield('main')
                </div>
            </div>
        </div>
        <div class="col-lg-3">
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
        <p>© 2015 {{ $version }}</p>
        <div id="vk_subscribe"></div>
        <div id="vk_subscribe2"></div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/js/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.2/js/ripples.js"></script>
<script>
    $.material.init();
</script>
</body>
</html>