<!DOCTYPE html>
<html>
<head>
    <title>{{ Theme::get('Yönetim Paneli') }}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ Theme::get('keywords') }}">
    <meta name="description" content="{{ Theme::get('description') }}">
    {{HTML::style(Theme::path()."/assets/css/theme-default.css")}}
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->scripts() }}
</head>
<body>
{{ Theme::content() }}

{{ Theme::asset()->container('footer')->scripts() }}
</body>
</html>