<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../public/css/all.css">
    <title>{{ trans('message.title') }}</title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{{ trans('message.head') }}</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('message.menu') }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">{{ trans('message.home') }}</a></li>
                        <li><a href="#">{{ trans('message.contact') }}</a></li>
                        <li><a href="#">{{ trans('message.about') }}</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{!! route('user.change-language', ['en']) !!}">{{ trans('message.english') }}</a></li>
                <li><a href="{!! route('user.change-language', ['vi']) !!}">{{ trans('message.vietnamese') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
