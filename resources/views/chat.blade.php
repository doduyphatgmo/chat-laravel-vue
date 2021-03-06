<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="app">
        <div class="offset-4 col-4">
            <li class="list-group-item active">Chat room</li>
            <ul class="list-group" v-chat-scroll>
                <message v-for="value in chat.message" :key="index" color="success">@{{ value }}</message>
            </ul>
            <input type="text" class="form-control message" v-model="message" @keyup.enter="send()" placeholder="Type your message here ..." />
        </div>
    </div>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>