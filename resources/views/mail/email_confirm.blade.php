<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

</head>
<body>
<h1>Email Verification</h1>
<p>{{$user_name}}（{{$user_email}}）</p>
<p>Cảm ơn bạn đã đăng ký hệ thống này, vui lòng nhấp vào liên kết bên dưới để xác nhận tài khoản của bạn.</p>
<p><a href="{{env('APP_URL')}}/activation/{{$token}}" target="_blank">{{env('APP_URL')}}/activation/{{$token}}</a></p>
<p></p>
<p>I-Bid</p>
</body>


</html>
