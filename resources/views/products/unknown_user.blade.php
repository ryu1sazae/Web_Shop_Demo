<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <title>show products data</title>
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        <!-- Styles -->
    </head>
    <body>
        <ul>
            <li><a href="index">商品一覧</a></li>
            <li><a href="add">商品追加</a></li>
            <li><a href="edit">Contact</a></li>
            <li><a href="about.asp">About</a></li>
        </ul>
        <div class="unknown_item">商品が見つかりません</div>
        <div>画面中央らへんに表示した方が良さげ</div>
    </body>
</html>
