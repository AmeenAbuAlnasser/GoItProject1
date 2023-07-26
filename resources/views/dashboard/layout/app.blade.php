<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layout.head')
    @stack('styles')
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

    <script src="{{ asset('dashboard/assets/js/hs.theme-appearance.js') }}"></script>

    <script src="{{ asset('dashboard/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}"></script>

    <!-- ========== HEADER ========== -->
    @include('dashboard.layout.header')

    <!-- Navbar Vertical -->
    @include('dashboard.layout.sidebar')

    <!-- ========== MAIN CONTENT ========== -->

    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            @yield('title')
                        </h1>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->

            <!-- Stats -->
            @yield('content')

        </div>
        <!-- End Content -->

        <!-- Footer -->

        @include('dashboard.layout.footer')

        <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->



    @include('dashboard.layout.scripts')
    @stack('scripts')
</body>

</html>
