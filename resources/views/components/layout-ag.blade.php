<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('cssfiles/sidebar.css')}}">
    <!-- Boxicons CSS -->
    <link
        href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
        rel="stylesheet"
    />

</head>
<body>

<section class="overlay">

</section>
<nav>
    <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Gestion des chèques
</span>
    </div>
    <div class="sidebar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Gestion des chèques
</span>
        </div>

        <div class="sidebar-content">
            <ul class="lists">



                <li class="list">
                    <a href="/home_agent" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Accueille</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/agent" class="nav-link">
                        <i class="bx bx-plus icon"></i>
                        <span class="link">Creation de cheque</span>
                    </a>
                </li>
 


            </ul>
            <div class="bottom-content">
                <li class="list">
                    <x-dropdown-link  :href="route('profile.edit')" class="nav-link">
                        <i class="bx bxs-user icon"></i>
                        <span class="link">{{ __('Profile') }}</span>

                    </x-dropdown-link>

                </li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="list">
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link">
                            <i class="bx bx-log-out icon"></i>
                            <span class="link">{{ __('Log Out') }}</span>

                        </x-dropdown-link>
                    </li>
                </form>

            </div>


        </div>
    </div>
</nav>


<!-- Main Content -->
<div class="main-content">

    {{$slot}}

</div>
<script src="{{asset('cssfiles/sidebar.js')}}"></script>
</body>
</html>
