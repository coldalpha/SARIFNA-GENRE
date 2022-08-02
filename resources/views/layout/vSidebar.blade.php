<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="Salam-genre-logo-removebg-preview.png" class="logo-icon" alt="logo icon" />
        </div>
        <div>
            <h4 class="logo-text">SARIFNA</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <!--HOME-->
        <li>
            <a href="{{ url('/home') }}">
                <div class="parent-icon">
                    <i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>
        <!--JADWAL-->
        <li>
            <a href="{{ url('/jadwal') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-calendar-star"></i>
                </div>
                <div class="menu-title">Jadwal</div>
            </a>
        </li>
        <!--EDUKASI-->
        <li class="menu-label">EDUKASI</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-brain"></i>
                </div>
                <div class="menu-title">Substansi Genre</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/pup') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">PUP</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/hivaids') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">HIV & AIDS</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/lifeskill') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">LIFE SKILL</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-shield-x"></i>
                </div>
                <div class="menu-title">TRIAD KRR</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/pernikahandini') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">Pernikahan Dini</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sekspranikah') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">Seks Pranikah</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/napza') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">NAPZA</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-book-heart"></i>
                </div>
                <div class="menu-title">Umum</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/tentangkita') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">Tentang Kita</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/stunting') }}">
                        <div class="parent-icon">
                            <i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">Stunting</div>
                    </a>
                </li>
            </ul>
        </li>
        <!--KONSELING-->
        <li>
            <a href="{{ url('/konseling') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-chat"></i>
                </div>
                <div class="menu-title">Konseling</div>
            </a>
        </li>
        <!--SETELAN-->
        <li class="menu-label">Users Management</li>
        <li>
            <a href="{{ url('/setelan') }}">
                <div class="parent-icon">
                    <i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Setelan</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
