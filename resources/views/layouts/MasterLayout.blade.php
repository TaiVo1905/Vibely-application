<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/Css/Master.css') }}">
    @yield('styles')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>@yield('title') - Vibely</title>
</head>

<body>
    <main class="container">
        <header class="header">
            <a href="/" class="logo">Vibely</a>
            <div class="search-bar">
                <img src="{{ asset('images/icon/search.png') }}" alt="Search" width="20">
                <input type="text" placeholder="@yield('search-placeholder', 'Search...')">
            </div>
            <div class="icons">
                <button class="icon-btn" title="Create Post">
                    <img src="{{ asset('images/icon/add-icon-in-circle.png') }}" alt="Create">
                </button>
                <button class="icon-btn {{ request()->is('messages*') ? 'active' : '' }}" title="Messages">
                    <img src="{{ asset('images/icon/video-outline.png') }}" alt="Messages">
                </button>
                <button class="theme-toggle" id="theme-toggle" title="Toggle Theme">
                    <div class="sun-moon">
                        <div class="sun">
                            <div class="sun-rays"></div>
                        </div>
                        <div class="moon">
                            <div class="moon-crater"></div>
                            <div class="moon-crater"></div>
                            <div class="moon-crater"></div>
                        </div>
                    </div>
                </button>
                <img src="{{ asset('images/icon/yellowdp-1.png') }}" alt="User Profile" class="avatar">
            </div>
        </header>

        <div class="layout-wrapper">
            <nav class="sidebar">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}" title="Home">
                    <img src="{{ asset('images/icon/Vector.png') }}" alt="Home">
                </a>
                <a href="/groups" class="{{ request()->is('groups*') ? 'active' : '' }}" title="Groups">
                    <img src="{{ asset('images/icon/Group.png') }}" alt="Groups">
                </a>
                <a href="/messages" class="{{ request()->is('messages*') ? 'active' : '' }}" title="Messages">
                    <img src="{{ asset('images/icon/bxs_chat.png') }}" alt="Messages">
                </a>
                <a href="/explore" class="{{ request()->is('explore*') ? 'active' : '' }}" title="Explore">
                    <img src="{{ asset('images/icon/Vector_kim.png') }}" alt="Explore">
                </a>
                <a href="/notifications" class="{{ request()->is('notifications*') ? 'active' : '' }}" title="Notifications">
                    <img src="{{ asset('images/icon/two.png') }}" alt="Notifications">
                </a>
                <a href="/settings" class="{{ request()->is('settings*') ? 'active' : '' }}" title="Settings">
                    <img src="{{ asset('images/icon/setting.png') }}" alt="Settings">
                </a>
            </nav>

            <section class="content">
                @yield('content')
            </section>
        </div>
    </main>

    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script>
        // Theme toggle functionality
        const themeToggle = document.getElementById('theme-toggle');
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

        const currentTheme = localStorage.getItem('theme');
        if (currentTheme) {
            document.body.setAttribute('data-theme', currentTheme);
        }

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.body.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    </script>
    @yield('scripts')
</body>

</html>