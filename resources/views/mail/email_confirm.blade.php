<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

</head>
<body>
<h1>報名系統確認信</h1>
<p>{{$user_name}}（{{$user_email}}）您好，</p>
<p>感謝您註冊本系統，請按以下連結進行帳號確認</p>
<p><a href="{{env('APP_URL')}}/activation/{{$link}}" target="_blank">{{env('APP_URL')}}/activation/{{$link}}</a></p>
<p></p>
<p>國立中正大學創新創業基地</p>
</body>


</html>
