@extends('layouts.MainLayout')

@section('title', 'Home Page')

@section('search-placeholder', 'Search anything here...')

@section('styles')
@parent
<link rel="stylesheet" href="{{ asset('assets/css/mainLayout.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/chats.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/chat.css')}}">

@endsection

@section('main-content')
    @include('components.post')
@endsection

@section('chat-section')
    @include('components.chats')
@endsection