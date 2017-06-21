<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Admin/css/bootstrap.css">
    @section('css')
        <style>
            body {
                padding-top: 50px;
            }

        </style>
    @show
    <title>@yield('title','后台')</title>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default affix-top">
    <div class="container">
            <ul id="menu-primary" class="nav navbar-nav">
                <li class="menu-item">
                    <a>首页</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('admin/user/index')}}">用户</a>
                </li>
                <li class="menu-item">
                    <a>商品</a>
                </li>
                <li class="menu-item">
                    <a>订单</a>
                </li>
            </ul>
    </div>
</nav>
@yield('content')
</body>
</html>