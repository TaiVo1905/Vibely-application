<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Feed</title>
    <link rel="stylesheet" href="{{asset('assets/css/activity.css')}}">
</head>
<body>

<div class="activity-container">
    <h2>Activity <a href="#" class="see-all">See all</a></h2>

    <p class="section-title">New</p>

    <div class="activity-item">
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" alt="User">
        <div class="activity-details">
            <strong>Danial Jerry</strong> <span>started Following you.</span>
        </div>
        <div class="follow-btn"><img src="{{ asset('images/icon/addfr.png') }}" alt="icon">
        </div>
    </div>

    <div class="activity-item">
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" alt="User">
        <div class="activity-details">
            <strong>Nafiya Raz</strong> <span>liked your photo. 2m</span>
        </div>
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" class="post-thumbnail" alt="Liked Post">
    </div>

    <div class="activity-item">
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" alt="User">
        <div class="activity-details">
            <strong>Pormubo</strong> <span>liked your photo. 2m</span>
        </div>
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" class="post-thumbnail" alt="Liked Post">
    </div>

    <div class="activity-item">
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" alt="User">
        <div class="activity-details">
            <strong>Kaliz Naji</strong> <span>started Following you.</span>
        </div>
        <div class="follow-btn"><img src="{{ asset('images/icon/addfr.png') }}" alt="icon"></div>
    </div>

    <div class="activity-item">
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" alt="User">
        <div class="activity-details">
            <strong>Febinclyo</strong> <span>liked your photo. 2m</span>
        </div>
        <img src="{{ asset('images/icon/avartar_ac.jpg') }}" class="post-thumbnail" alt="Liked Post">
    </div>

</div>

</body>
</html>
