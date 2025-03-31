@extends('layouts.MasterLayout')

@section('title', 'Home')

@section('search-placeholder', 'Search for creators, inspirations, travel video projects...')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Css/MainLayout.css') }}">
@endsection

@section('content')

<div class="activity-panel">
    @include('components.profile')
</div>

<div class="post-container">
    @yield('main-content')
    @include('components.post')

</div>

<div class="chat-section">
    @include('components.chats')

</div>
    <div class="activity-panel">
        @yield('activity-panel')
    </div>
    @yield('main-content')
    <div class="chat-section">
        @yield('chat-section')
    </div>
@endsection