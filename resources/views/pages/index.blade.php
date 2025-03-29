@extends('layouts.MainLayout')

@section('title', 'Home Page')

@section('search-placeholder', 'Search anything here...')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/Css/Home.css') }}">
@endsection

@section('main-content')
    <div class="posts-list">
        <div class="create-post">
            <img src="{{ asset('images/icon/yellowdp-1.png') }}" alt="User Avatar" class="user-avatar">
            <input type="text" placeholder="What's on your mind?" class="post-input">
        </div>
        <x-post />
    </div>
@endsection

@section('chat-section')
    @include('components.chats')
@endsection