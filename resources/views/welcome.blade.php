<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <?php //<a href="{{URL::to('auth/github')}}"><img src="{{asset('assets/login-with-Github-button.png')}}" /></a> ?>
                <a href="{{URL::to('auth/linkedin')}}"><img src="{{asset('assets/register_login_linkedin_reply.png')}}" /></a>
                <?php // <a href="{{URL::to('auth/xing')}}"><img src="{{asset('assets/xing_login.png')}}" /></a> ?>
            </div>
        </div>
    </body>
</html>
