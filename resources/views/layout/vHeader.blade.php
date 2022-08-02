    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-icon fs-3">
                <i class="bi bi-list"></i>
            </div>
            <marquee behavior="" direction="left">
                <h4 class="justify-content-center">
                    SARIFNA-GENRE | Sahabat Pecinta Informasi Genre
                </h4>
            </marquee>
            <div class="top-navbar-right ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown dropdown-user-setting">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                            data-bs-toggle="dropdown">
                            <div class="user-setting d-flex align-items-center">
                                <i class="lni lni-cog"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                                            <small class="mb-0 dropdown-user-designation text-secondary">
                                                {{ Auth::user()->status }}
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/setelan') }}">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-person-fill"></i></div>
                                        <div class="ms-3"><span>Setelan</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
