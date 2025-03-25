<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
</head>
<body>

    <div class="sidebar">
    <a href="#" onclick="setActive(this)">
        <img src="{{ asset('images/icon/Vector.png') }}" alt="home">
    </a>
    <a href="#" onclick="setActive(this)">
        <img src="{{ asset('images/icon/Group.png') }}" alt="group">
    </a>
    <a href="#" onclick="setActive(this)">
        <img src="{{ asset('images/icon/bxs_chat.png') }}" alt="chat">
    </a>
    <a href="#" onclick="setActive(this)">
        <img src="{{ asset('images/icon/Vector_kim.png') }}" alt="kim">
    </a>
    <a href="#" onclick="setActive(this)">
        <img src="{{ asset('images/icon/two.png') }}" alt="two">
    </a>
    <a href="#" class="active" onclick="setActive(this)">
        <img src="{{ asset('images/icon/setting.png') }}" alt="Settings">
    </a>
</div>
<script src="{{ asset('assets/js/sidebar.js') }}"></script>

</body>
</html>
