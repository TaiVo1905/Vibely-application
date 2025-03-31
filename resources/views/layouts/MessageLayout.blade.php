@extends('layouts.MasterLayout')

@section('title', 'Messages')

@section('search-placeholder', 'Search messages...')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Css/MessageLayout.css') }}">
@endsection

@section('content')
{{-- <div class="message-list">
    <div class="message-header">
        <h2>Messages</h2>
        <button class="new-chat-btn">
            <img src="{{ asset('images/icon/add-icon-in-circle.png') }}" alt="New Chat">
            New Chat
        </button>
    </div>
    <div class="message-search">
        <img src="{{ asset('images/icon/search.png') }}" alt="Search">
        <input type="text" placeholder="Search conversations...">
    </div>
    <div class="conversations">
        <!-- Conversation items will be loaded here -->
    </div>
</div>

<div class="chat-content">
    <div class="chat-header">
        <div class="chat-user-info">
            <img src="{{ asset('images/icon/yellowdp-1.png') }}" alt="User" class="chat-avatar">
            <div class="chat-user-details">
                <h3>John Doe</h3>
                <span class="status">Online</span>
            </div>
        </div>
        <div class="chat-actions">
            <button class="icon-btn" title="Video Call">
                <img src="{{ asset('images/icon/video-call.png') }}" alt="Video Call">
            </button>
            <button class="icon-btn" title="More Options">
                <img src="{{ asset('images/icon/more.png') }}" alt="More">
            </button>
        </div>
    </div>
    <div class="chat-messages">
        <!-- Messages will be loaded here -->
    </div>
    <div class="chat-input">
        <button class="icon-btn" title="Attach File">
            <img src="{{ asset('images/icon/attach.png') }}" alt="Attach">
        </button>
        <input type="text" placeholder="Type a message...">
        <button class="send-btn">
            <img src="{{ asset('images/icon/send.png') }}" alt="Send">
        </button>
    </div>
</div> --}}
@endsection