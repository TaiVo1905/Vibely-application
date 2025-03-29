@extends('layouts.MasterLayout')

@section('title', 'Messages')

@section('search-placeholder', 'Search messages...')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Css/MessageLayout.css') }}">
@endsection

@section('content')
    @include('components.setting')
    @include('components.privacy')

@endsection