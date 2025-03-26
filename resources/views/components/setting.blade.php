<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/setting.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="content">
        <div class="title">Settings</div>
        
        @include('components.search_bar')

        <ul class="settings-list">
            <li class="setting-item"><i class="fas fa-user" style="color: #00095E; font-size: 25px;" class="icon"></i> Account</li>
            <li class="setting-item"><i class="fas fa-cogs" style="color: #00095E; font-size: 25px;" class="icon"></i> Apps and websites</li>
            <li class="setting-item"><i class="fas fa-key" style="color: #00095E; font-size: 25px;" class="icon"></i> Change Password</li>
            <li class="setting-item"><i class="fas fa-history" style="color: #00095E; font-size: 25px;" class="icon"></i> Activity log</li>
            <li class="setting-item active"><i class="fas fa-shield-alt" style="color: #00095E; font-size: 25px;" class="icon"></i> Privacy and Security</li>
            <li class="setting-item"><i class="fas fa-sliders-h" style="color: #00095E; font-size: 25px;" class="icon"></i> Others</li>
            <li class="setting-item"><i class="fas fa-sign-out-alt" style="color: #00095E; font-size: 25px;" class="icon"></i> Log Out</li>
        </ul>

         <div class="footer-info">
            <p class="company-name">JassBee.in</p>
            <p class="address">CodeStreak.i Platforms Inc<br>1 Hacker Way, Menlo Park, California 94025</p>
        </div>
    </div>
</body>
</html>