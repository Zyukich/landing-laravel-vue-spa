<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <title>Otclick-ADV Платформа эффективного онлайн-маркетинга</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!--[if lt IE 11]>
    <div style='text-align: center; clear: both; height: 75px; position: relative;'>
        <img src="/images/logo.png" alt="logo"
             style="width: 150px; float: left;margin-left: 20px;margin-top: 10px;position: absolute;left: 0;">
        <div style='width: 740px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
            <div style='width: 275px; float: left; font-family: Arial, sans-serif;margin-right: 100px;margin-left: 150px;'>
                <div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>Вы используете устаревший браузер
                </div>
                <div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>Для полноценной работы, пожалуйста,
                    воспользуйтесь любым современным браузером.
                </div>
            </div>
            <div style='width: 75px;float: left;margin-top: 25px;font-family: Arial, sans-serif;'>
                <a href='https://www.mozilla.org/en-US/firefox/browsers' target='_blank'>Firefox</a>
            </div>
            <div style='width: 73px;float: left;margin-top: 25px;font-family: Arial, sans-serif;'>
                <a href='https://www.apple.com/safari' target='_blank'>Safari</a>
            </div>
            <div style='float: left;margin-top: 25px;font-family: Arial, sans-serif;'>
                <a href='https://www.google.com/chrome' target='_blank'>Chrome</a>
            </div>
        </div>
    </div>
    <![endif]-->
</head>
<body>
@yield('content')
</body>
</html>
