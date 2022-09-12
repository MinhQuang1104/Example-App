<header class="py-3 border shadow">
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex align-items-center">
                <a href="/" style="text-decoration: none">Example App Store</a>
            </div>
            <div class="col-8 d-flex justify-content-end align-items-center">
                <div class="col-8 d-flex justify-content-end">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        @if (isset($role))
                            @if ($role !== "admin")
                                <li class="nav-item" style="display: none">
                                    <a class="nav-link" href="">User</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="">User</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item" style="display: none">
                                <a class="nav-link" href="">User</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <ul class="nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Register</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('change-password')}}">Change password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Logout</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>