<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white p-0 sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/Logo.png') }}" height="75%" alt="Logo Perusahaan"> <!-- Replace with your logo -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'service' ? 'active' : '' }}"
                        href="{{ route('service') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'project' ? 'active' : '' }}"
                        href="{{ route('project') }}">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (App::getLocale() === 'id')
                            <img src="/img/flags/id.png" alt="Indonesia" style="margin-right: 8px;"
                                width="20">Bahasa Indonesia
                        @else
                            <img src="/img/flags/en.png" alt="English" style="margin-right: 8px;"
                                width="20">English
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-right-adjust"
                        aria-labelledby="languageDropdown">
                        <li>
                            <a class="dropdown-item {{App::getLocale()  === 'id' ? 'active' : '' }}" href="?lang=id">
                                <img src="/img/flags/id.png" alt="Indonesia" width="20"> Bahasa Indonesia
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{App::getLocale()  === 'en' ? 'active' : '' }}" href="?lang=en">
                                <img src="/img/flags/en.png" alt="English" width="20"> English
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
