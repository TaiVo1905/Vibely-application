<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post UI</title>
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
</head>
<body>

    <div class="post-container">
        <div class="post-header">
            <div class="user-info">
                <img src="{{ asset('images/icon/avatar.png') }}" alt="Avatar" class="user-avatar">
                <div>
                    <div class="user-name">Twin Bee</div>
                    <div class="user-location">Fort William, United Kingdom</div>
                </div>
            </div>
            <img src="{{ asset('images/icon/gach.png') }}" width="20">
        </div>

        <img src="{{ asset('images/icon/postimage.png') }}" alt="Post Image" class="post-image">

        <div class="post-actions">
            <div class="icons">
            <img src="{{ asset('images/icon/like.png') }}" alt="Like">
            <img src="{{ asset('images/icon/comment.png') }}" alt="comment">
            <img src="{{ asset('images/icon/share.png') }}" alt="shared">
            </div>
            <img src="{{ asset('images/icon/save.png') }}" alt="save">
        </div>

        <div class="post-caption">
            <span>Twin Bee</span> Ain't no mountain high enough, ain't no valley low enough, ain't no river wide enough, to keep me from getting to you babe.
        </div>
    </div>

</body>
</html>
