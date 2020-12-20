<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://medgorod.info/upload/medialibrary/1c8/1c894688ac52b723f26a38fab9853eb6.jpg" type="image/x-icon">
        <title>ЧелГУ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .link a:hover {
                border-bottom: 1px dashed red;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    <img src = "https://www.csu.ru/csu-update/img/logo.jpg" style = "width: 500px; height: 180px;">
                </div>

                <div class="links link">
                    <a href="https://vk.com/csu76">Вконтакте</a>
                    <a href="https://www.instagram.com/csu.ru/">Instagram</a>
                    <a href="https://www.facebook.com/csu76">Facebook</a>
                    <a href="https://www.youtube.com/channel/UCBrVtPCS3cxQOBFxdrPfxHQ?view_as=subscriber">YouTube</a>
                    <a href="http://moodle.uio.csu.ru/">Moodle</a>
                </div>
            </div>
        </div>
    </body>
</html>
