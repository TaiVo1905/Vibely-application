<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/privacy.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="content-privacy">
        <div class="title">
            <i class="fas fa-shield-alt" style="color: #00095E; font-size: 25px;" class="icon"></i> 
            <div class="des-title">Privacy and Security Settings</div>
        </div>
        <div class="detail-privacy">
            <div class="title-detail">Account privacy</div>
            <label><input type="checkbox"> Private account</label>
            <div class="des">When your account is private, only people you approve can see your photos and videos on JassBee.in. Your existing followers won't be affected.</div>
            <div class="title-detail">Activity status</div>
            <label><input type="checkbox">Show activity status</label>
            <div class="des">Allow accounts that you follow and anyone you message to see when you were last active or are 
currently active on JassBee.in apps. When this is turned off, you won't be able to see the activity status 
of other accounts.</div>
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
</body>
</html>