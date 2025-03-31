@extends('layouts.MasterLayout')

@section('title', 'Home')

@section('search-placeholder', 'Search for creators, inspirations, travel video projects...')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Css/MainLayout.css') }}">
@endsection

@section('content')
<div class="activity-panel">
    <h2>Recent Activity</h2>
</div>

<div class="post-container">
    @yield('main-content')
</div>

<div class="chat-section">
    <h2>Messages</h2>
    <!-- Chat content will be loaded here -->
</div>
@endsection