@extends('layouts.MasterLayout')

@section('title', 'Messages')

@section('search-placeholder', 'Search messages...')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/conversation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chats.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/chat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bubble.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/img_con.css')}}">
@endsection

@section('content')
    @include('components.chats')
    <div class="content-conversation" id="conversation">
        <div class="con-head">
            @include('components.chat')
            <div class="icon-conver">
                <i class="fas fa-phone-alt" style="color: #A87DFF; font-size: 30px;" ></i>   <!-- Biểu tượng cuộc gọi -->
                <i class="fas fa-video" style="color: #A87DFF; font-size: 30px;"></i>      <!-- Biểu tượng video -->
                <i class="fas fa-info-circle" style="color: #A87DFF; font-size: 30px;"></i> 
            </div>
        </div>
        <div class="content-detail">
            <div class="chat-bubble">
                <p>I was wondering if you remembered our last balloon fest.</p>
            </div>
            <div class="chat-bubble-2">
                <p>Yeah, you've got the picture 📸 we took from there..!</p>
            </div>
            <img class="message-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3wxJ0c-jC6VcDASO9aiDWD9zWAeJLKrS5gg&s" alt="images">
            <div class="chat-bubble-2">
                <p>Yeah, you've got the picture 📸 we took from there..!</p>
            </div>
            <div class="chat-bubble">
                <p>I was wondering if you remembered our last balloon fest.</p>
            </div>
            <div class="chat-bubble-2">
                <p>Yeah, you've got the picture 📸 we took from there..!</p>
            </div>
            <div class="chat-bubble">
                <p>I was wondering if you remembered our last balloon fest.</p>
            </div>
            <div class="chat-bubble-2">
                <p>Yeah, you've got the picture 📸 we took from there..!</p>
            </div>
            <div class="chat-bubble">
                <p>I was wondering if you remembered our last balloon fest.</p>
            </div>
        </div>
        <div class="con-footer">
            <div class="icon"><i class="far fa-smile" style="color: #A87DFF; font-size: 30px;"></i></div>
            <div class="icon"><i class="fas fa-volume-up" style="color: #A87DFF; font-size: 30px;"></i></div>
            <input type="text" class="message-input" placeholder="Type a message..." />
            <div class="icon"><i class="fas fa-microphone" style="color: #A87DFF; font-size: 30px;"></i></div>
            <div class="send-icon"><i class="fas fa-paper-plane" style="color: #A87DFF; font-size: 30px;"></i></div>
        </div>
</div> 
@endsection