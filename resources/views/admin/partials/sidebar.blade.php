<aside class="sidebar">
    <div class="sidebar__menu-group">
        <ul class="sidebar_nav">
            <li class="menu-title">
                <span>Main menu</span>
            </li>
            <li class="has-child">
                <a href="{{ route('dashboard') }}">
                    <span data-feather="home" class="nav-icon"></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="has-child">
                <a href="#" class="">
                    <span data-feather="layout" class="nav-icon"></span>
                    <span class="menu-text">Layouts</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li class="l_sidebar">
                        <a href="#" data-layout="light">Light Mode</a>
                    </li>
                    <li class="l_sidebar">
                        <a href="#" data-layout="dark">Dark Mode</a>
                    </li>
                    <li class="l_navbar">
                        <a href="#" data-layout="top">Top Menu</a>
                    </li>
                    <li class="l_navbar">
                        <a href="#" data-layout="side">Side Menu</a>
                    </li>
                </ul>
            </li>
            <li class="menu-title m-top-30">
                <span>Settings</span>
            </li>
            <li>
                <a href="{{ route('admin.setting') }}">
                    <span data-feather="settings" class="nav-icon"></span>
                    <span class="menu-text">Generel Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.setting.logo') }}">
                    <span data-feather="settings" class="nav-icon"></span>
                    <span class="menu-text">Logo Update</span>
                </a>
            </li>
            <li class="menu-title m-top-30">
                <span>Frontend</span>
            </li>
            <li class="has-child">
                <a href="#" class="">
                    <span data-feather="mail" class="nav-icon"></span>
                    <span class="menu-text">Sections</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li>
                        {{-- <a class="" href="{{ route('home.banner') }}">Banner</a> --}}
                    </li>
                    <li>
                        {{-- <a class="" href="{{ route('home.service') }}">Service</a> --}}
                    </li>
                </ul>
            </li>
            <li>
                <a href="chat.html" class="">
                    <span data-feather="message-square" class="nav-icon"></span>
                    <span class="menu-text">Chat</span>
                </a>
            </li>
            <li>
                <a href="login.html" class="">
                    <span data-feather="user" class="nav-icon"></span>
                    <span class="menu-text">Log In</span>
                </a>
            </li>
            <li>
                <a href="sign-up.html" class="">
                    <span data-feather="user-plus" class="nav-icon"></span>
                    <span class="menu-text">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
