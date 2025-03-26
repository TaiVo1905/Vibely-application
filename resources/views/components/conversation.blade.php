<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/conversation.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    .content-detail {
        background-image: url('{{ asset('images/background.png') }}');
    }
</style>
</head>
<body>
    <div class="content-conversation">
        <div class="con-head">
            @include('components.chat')
            <div class="icon-conver">
                <i class="fas fa-phone-alt" style="color: #A87DFF; font-size: 30px;" ></i>   <!-- Biểu tượng cuộc gọi -->
                <i class="fas fa-video" style="color: #A87DFF; font-size: 30px;"></i>      <!-- Biểu tượng video -->
                <i class="fas fa-info-circle" style="color: #A87DFF; font-size: 30px;"></i> 
            </div>
        </div>
        <div class="content-detail">
            @include('components.buble_1')
            @include('components.buble_2')
            @include('components.img_in_con')
            @include('components.buble_2')
            @include('components.buble_1')
            @include('components.buble_2')
            @include('components.buble_1')
            @include('components.buble_2')
            @include('components.buble_1')
        </div>
        <div class="con-footer">
            <div class="icon"><i class="far fa-smile" style="color: #A87DFF; font-size: 30px;"></i></div>
            <div class="icon"><i class="fas fa-volume-up" style="color: #A87DFF; font-size: 30px;"></i></div>
            <input type="text" class="message-input" placeholder="Type a message..." />
            <div class="icon"><i class="fas fa-microphone" style="color: #A87DFF; font-size: 30px;"></i></div>
            <div class="send-icon"><i class="fas fa-paper-plane" style="color: #A87DFF; font-size: 30px;"></i></div>
        </div>
    </div>
</body>
</html>