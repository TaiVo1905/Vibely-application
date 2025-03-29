<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/Css/MainLayout.css') }}">
    <title>Main Layout</title>
</head>

<body>
    <main class="container">
        <header class="header">@include('components.header')</header>
        <div class="layout-wrapper">
            <aside class="sidebar">@include('components.sidebar')</aside>
            <section class="content">
                {{-- <div class="message-list"> --}}
                    @include('components.setting')
                {{-- </div> --}}
                {{-- <div class="chat-content"> --}}
                    @include('components.privacy')
                {{-- </div> --}}
            </section>
        </div>
    </main>
</body>

</html>