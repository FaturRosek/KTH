@php
    $currentUser = auth()->user()->load('role');
@endphp

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/images/logo.png') }}" width="180" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="sidebar-item mt-3">
                        <a class="sidebar-link" href="{{ url('/dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-layout-dashboard"></i></span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/kuisioner')}}" aria-expanded="false">
                            <span><i class="ti ti-list"></i></span>
                            <span class="hide-menu">Kuisioner Laporan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--  Sidebar End -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover dropdown-toggle" href="#" id="drop2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35"
                                    height="35" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                <li class="dropdown-item text-center">
                                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle"
                                        width="80" height="80" alt="" />
                                    <h5 class="mt-3 mb-1 fs-3">{{ $currentUser->name }}</h5>
                                    <span class="mb-1 d-block text-dark">{{ $currentUser->role->name }}</span>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary w-100">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            <div class="row">
                @yield('konten')
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan Bootstrap JS jika belum ada -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
