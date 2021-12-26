<html>

    <head>
        @include('layouts.head')
        @stack('header.style')
    </head>

    <body>
        <div class="main-wrapper">
            @include('layouts.sidebar')

            <div class="page-wrapper">

                <!-- partial:../../partials/_navbar.html -->
                <nav class="navbar">
                    <a href="#" class="sidebar-toggler">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="navbar-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown nav-profile">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://via.placeholder.com/30x30" alt="profile">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                    <div class="dropdown-header d-flex flex-column align-items-center">
                                        <div class="figure mb-3">
                                            <img src="https://via.placeholder.com/80x80" alt="">
                                        </div>
                                        <div class="info text-center">
                                            <p class="name font-weight-bold mb-0">Admin</p>
                                            <p class="email text-muted mb-3">admin@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-body">
                                        <ul class="profile-nav p-0 pt-3">
                                            <li class="nav-item">
                                                <a href="javascript:;" class="nav-link">
                                                    <i data-feather="log-out"></i>
                                                    <span>Log Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- partial -->

                <div class="page-content">
                    @yield('content')
                </div>

                <!-- partial:../../partials/_footer.html -->
                <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <p class="text-muted text-center text-md-left">Made By <span> Bappeda Kabupaten Sukabumi </span> <a href="https://www.bappeda.sukabumikab.go.id"
                            target="_blank">ICE</a>. All rights reserved</p>
                </footer>
                <!-- partial -->

            </div>
        </div>

        <!-- core:js -->
        <script src="{{ asset('vendors/core/core.js') }}"></script>
        <!-- inject js -->
        <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
        @stack('footer.javascript')
    </body>


</html>