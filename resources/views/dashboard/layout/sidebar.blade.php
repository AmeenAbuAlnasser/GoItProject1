<aside
class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
<div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="index.html" aria-label="Front">
            <img class="navbar-brand-logo" src="{{ asset('dashboard/assets/svg/logos/logo.svg') }}" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo" src="{{ asset('dashboard/assets/svg/logos-light/logo.svg') }}" alt="Logo"
                data-hs-theme-appearance="dark">
            <img class="navbar-brand-logo-mini" src="{{ asset('dashboard/assets/svg/logos/logo-short.svg') }}" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo-mini" src="{{ asset('dashboard/assets/svg/logos-light/logo-short.svg') }}" alt="Logo"
                data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
            <i class="bi-arrow-bar-left navbar-toggler-short-align"
                data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
            <i class="bi-arrow-bar-right navbar-toggler-full-align"
                data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
            <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">


                <span class="dropdown-header mt-4">Pages</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>

                <!-- Collapse -->
                <div class="navbar-nav nav-compact">

                </div>
                <div id="navbarVerticalMenuPagesMenu">
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#countriesNav"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#countriesNav" aria-expanded="false"
                            aria-controls="countriesNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Countries</span>
                        </a>

                        <div id="countriesNav" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.countries.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.countries.create') }}">Create</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#citiesNav"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#citiesNav" aria-expanded="false"
                            aria-controls="citiesNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Cities</span>
                        </a>

                        <div id="citiesNav" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.cities.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.cities.create') }}">Create</a>
                        </div>
                    </div>
                    <!-- Collapse -->
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#hotelsNav"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#hotelsNav" aria-expanded="false"
                            aria-controls="hotelsNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Hotels</span>
                        </a>

                        <div id="hotelsNav" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.hotels.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.hotels.create') }}">Create</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#mealPlanes"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#mealPlanes" aria-expanded="false"
                            aria-controls="hotelsNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Meal Planes</span>
                        </a>

                        <div id="mealPlanes" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.mealPlanes.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.mealPlanes.create') }}">Create</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#roomType"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#roomType" aria-expanded="false"
                            aria-controls="hotelsNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Room Type</span>
                        </a>

                        <div id="roomType" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.roomType.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.roomType.create') }}">Create</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#TicketType"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#TicketType" aria-expanded="false"
                            aria-controls="hotelsNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Ticket Type</span>
                        </a>

                        <div id="TicketType" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.TicketType.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.TicketType.create') }}">Create</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#Transportation"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#Transportation" aria-expanded="false"
                            aria-controls="hotelsNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Transportation</span>
                        </a>

                        <div id="Transportation" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.Transportation.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.Transportation.create') }}">Create</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#Trip"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#Trip" aria-expanded="false"
                            aria-controls="hotelsNav">
                            <i class="bi-people nav-icon"></i>
                            <span class="nav-link-title">Trip</span>
                        </a>

                        <div id="Trip" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="{{ route('dashboard.Trip.index') }}">Overview</a>
                            <a class="nav-link " href="{{ route('dashboard.Trip.create') }}">Create</a>
                        </div>
                    </div>
                    <!-- End Collapse -->

                </div>
            </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
            <ul class="navbar-vertical-footer-list">
                <li class="navbar-vertical-footer-list-item">
                    <!-- Style Switcher -->
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-dropdown-animation>

                        </button>

                        <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="selectThemeDropdown">
                            <a class="dropdown-item" href="#" data-icon="bi-moon-stars"
                                data-value="auto">
                                <i class="bi-moon-stars me-2"></i>
                                <span class="text-truncate" title="Auto (system default)">Auto (system
                                    default)</span>
                            </a>
                            <a class="dropdown-item" href="#" data-icon="bi-brightness-high"
                                data-value="default">
                                <i class="bi-brightness-high me-2"></i>
                                <span class="text-truncate" title="Default (light mode)">Default (light
                                    mode)</span>
                            </a>
                            <a class="dropdown-item active" href="#" data-icon="bi-moon"
                                data-value="dark">
                                <i class="bi-moon me-2"></i>
                                <span class="text-truncate" title="Dark">Dark</span>
                            </a>
                        </div>
                    </div>

                    <!-- End Style Switcher -->
                </li>

                <li class="navbar-vertical-footer-list-item">
                    <!-- Other Links -->
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-dropdown-animation>
                            <i class="bi-info-circle"></i>
                        </button>

                        <div class="dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="otherLinksDropdown">
                            <span class="dropdown-header">Help</span>
                            <a class="dropdown-item" href="#">
                                <i class="bi-journals dropdown-item-icon"></i>
                                <span class="text-truncate" title="Resources &amp; tutorials">Resources
                                    &amp; tutorials</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="bi-command dropdown-item-icon"></i>
                                <span class="text-truncate" title="Keyboard shortcuts">Keyboard
                                    shortcuts</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="bi-alt dropdown-item-icon"></i>
                                <span class="text-truncate" title="Connect other apps">Connect other
                                    apps</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="bi-gift dropdown-item-icon"></i>
                                <span class="text-truncate" title="What's new?">What's new?</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Contacts</span>
                            <a class="dropdown-item" href="#">
                                <i class="bi-chat-left-dots dropdown-item-icon"></i>
                                <span class="text-truncate" title="Contact support">Contact support</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Other Links -->
                </li>

                <li class="navbar-vertical-footer-list-item">
                    <!-- Language -->
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-dropdown-animation>
                            <img class="avatar avatar-xss avatar-circle"
                                src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/us.svg') }}"
                                alt="United States Flag">
                        </button>

                        <div class="dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="selectLanguageDropdown">
                            <span class="dropdown-header">Select language</span>
                            <a class="dropdown-item" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/us.svg') }}" alt="Flag">
                                <span class="text-truncate" title="English">English (US)</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/gb.svg') }}" alt="Flag">
                                <span class="text-truncate" title="English">English (UK)</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/de.svg') }}" alt="Flag">
                                <span class="text-truncate" title="Deutsch">Deutsch</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/dk.svg') }}" alt="Flag">
                                <span class="text-truncate" title="Dansk">Dansk</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/it.svg') }}" alt="Flag">
                                <span class="text-truncate" title="Italiano">Italiano</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="avatar avatar-xss avatar-circle me-2"
                                    src="{{ asset('dashboard/assets/vendor/flag-icon-css/flags/1x1/cn.svg') }}" alt="Flag">
                                <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                            </a>
                        </div>
                    </div>

                    <!-- End Language -->
                </li>
            </ul>
        </div>
        <!-- End Footer -->
    </div>
</div>
</aside>
