@extends('layouts.MasterLayout')

@section('title', 'Messages')

@section('search-placeholder', 'Search messages...')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/Css/MasterLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Css/search.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/settings.css')}}">
    <style>
        .content {
            flex: 1;
            display: flex !important;
            /* grid-template-columns: 350px 1fr !important; */
            gap: 1.5rem;
            margin-left: 70px;
            padding: 1.5rem;
            height: calc(100vh - 70px);
        }
    </style>
@endsection

@section('content')
    <div class="set-content">
        <div class="title">Settings</div>
        
        @include('components.search_bar')

        <ul class="settings-list">
            <li class="setting-item"><i class="fas fa-user" style="color: #00095E; font-size: 25px;" class="icon"></i> Account</li>
            <li class="setting-item"><i class="fas fa-cogs" style="color: #00095E; font-size: 25px;" class="icon"></i> Apps and websites</li>
            <li class="setting-item"><i class="fas fa-key" style="color: #00095E; font-size: 25px;" class="icon"></i> Change Password</li>
            <li class="setting-item"><i class="fas fa-history" style="color: #00095E; font-size: 25px;" class="icon"></i> Activity log</li>
            <li class="setting-item"><i class="fas fa-shield-alt"></i> Privacy and Security</li>
            <li class="setting-item"><i class="fas fa-sliders-h" style="color: #00095E; font-size: 25px;" class="icon"></i> Others</li>
            <li class="setting-item"><i class="fas fa-sign-out-alt" style="color: #00095E; font-size: 25px;" class="icon"></i> Log Out</li>
        </ul>

         <div class="footer-info">
            <p class="company-name">JassBee.in</p>
            <p class="address">CodeStreak.i Platforms Inc<br>1 Hacker Way, Menlo Park, California 94025</p>
        </div>
    </div>
    <div class="content-privacy">
        <div class="title-privacy">
            <i class="fas fa-shield-alt" style="color: #00095E; font-size: 25px;" class="icon"></i> 
            <div class="des-title">Privacy and Security Settings</div>
        </div>
        <div class="detail-privacy">
            <div class="title-detail">Account privacy</div>
            <label><input type="checkbox"> Private account</label>
            <div class="des">When your account is private, only people you approve can see your photos and videos on JassBee.in. Your existing followers won't be affected.</div>
            <div class="title-detail">Activity status</div>
            <label><input type="checkbox">Show activity status</label>
            <div class="des">Allow accounts that you follow and anyone you message to see when you were last active or are currently active on JassBee.in apps. When this is turned off, you won't be able to see the activity status of other accounts.</div>
            <div class="title-detail">Two-factor authentication</div>
            <div class="title-detail-des">We'll ask for a security code when we need to confirm that it's you logging in.</div>
            <label><input type="checkbox">Use text messaging</label>
            <div class="des">We'll send a code to your phone number ending in 0023.</div>
            <label><input type="checkbox">Use authentication app</label>
            <div class="receive">You'll receive a code from your security app.</div>
            <div class="more-privacy">
                <div class="more-des">More privacy settings</div>
                <i class="fas fa-cog"></i>
            </div>
        </div>
    </div>

@endsection