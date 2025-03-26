<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibely Header</title>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">

</head>
<body>

    <header class="header">
        <div class="logo">Vibely</div>

        <div class="search-bar">
            <img src="{{ asset('image/icon/search.png') }}" width="20">
            <input type="text" placeholder="Search for creators, inspirations, travel video projects...">
        </div>

        <div class="icons">
            <div class="icon-btn">
            <img src="{{ asset('images/icon/add-icon-in-circle.png') }}" width="33">
            </div>
            <div class="icon-btn">
            <img src="{{ asset('images/icon/video-outline.png') }}" width="33">
            </div>
            <img src="{{ asset('images/icon/yellowdp-1.png') }}" alt="User" class="avatar">
            </div>
    </header>




</body>
</html>
