<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-title">Settings</li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <i class="nav-icon icon-user"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/avatar">
                    <i class="nav-icon icon-user"></i> Profile Picture
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/password">
                    <i class="nav-icon icon-lock"></i> Password
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon icon-user"></i> logout
                    </a>
                </li>
            <li class="nav-item">
                    <a class="nav-link" href="/DisplayImages">
                        <i class="fal fa-shopping-cart"></i> View Items
                    </a>
                    
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
