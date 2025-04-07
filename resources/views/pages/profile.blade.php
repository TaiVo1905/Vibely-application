@extends('layouts.MainLayout')

@section('title', 'Home Page')

@section('search-placeholder', 'Search anything here...')

@section('styles')
@parent
<link rel="stylesheet" href="{{ asset('assets/css/MainLayout.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/chats.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/chat.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
@endsection

@section('section-left')
        <div class="profile-content" id="profile">
            <div class="profile-title">
                <img src="{{asset('images/avatar.jpg')}}" alt="avartar" class="avatar" id="avatar-image">
                <div class="email" id="email">hdgkdhgkd</div>
                </div>
                <div class="infor">
                    <div class="name" id="name">Mohammed Jaseem</div>
                    <i class="fas fa-user-edit" style="font-size: 25px;"></i>
                </div>
                <div class="des-pro" id="description">Traveling the world with 
                    better half via coing as a passionate job
                </div>        
        </div>
@endsection

@section('main-content')
    @include('components.post')
@endsection

@section('chat-section')
    @include('components.chats')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
    <script src="{{ asset('assets/js/post.js') }}"></script> 

@endsection
