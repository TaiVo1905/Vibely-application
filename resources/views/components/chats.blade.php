<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/chats.css')}}">

</head>
<body>
    <div class="content">
        <div class="title">
            <h2>Messages </h2>
            <img src="{{asset('images/messages.svg')}}" alt="messages">
        </div>
        @include('components.search_bar')
        {{-- <div class="search-container">
            <img src="{{asset('images/search.svg')}}" alt="search" class="search-icon">
            <input type="text" placeholder="Search messages">
            <img src="{{asset('images/setting.svg')}}" alt="" class="setting-icon">
        </div> --}}
        <div class="tab-container">
            <div class="tab-active">Primary</div>
            <div class="tab">General</div>
            <div class="tab-request">Request (2)</div>
        </div>
        <div class="chats">
            @for ($i = 0; $i < 6; $i++)
                @include('components.chat')
            @endfor
        </div>
    </div>
</body>
</html>