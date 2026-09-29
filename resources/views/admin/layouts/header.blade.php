<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - TechNest Accounting Software</title>
    <link rel="icon" type="image/png" href="{{ asset('/dist/img/favicon.png') }}">
    <!-- CSS files -->
    
    <link href="{{ asset('dist/css/tabler.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/demo.min.css?1684106062') }}" rel="stylesheet"/>
    <style>

      @import url('https://rsms.me/inter/inter.css');
      :root {
        --orange-color:#eb5a25;	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }

/* Active Top Menu */
.navbar-nav .nav-link.active{
    color: #eb5a25 !important;
    font-weight:600;
}


/* Active icon */
.navbar-nav .nav-link.active svg{
    stroke:#eb5a25;
}


/* Dropdown active item */
.dropdown-item.active{
    background:#fff1eb !important;
    color:#eb5a25 !important;
}


/* Hover */
.nav-link:hover{
    color:#eb5a25 !important;
}


.dropdown-item:hover{
    color:#eb5a25 !important;
    background:#fff7f3;
}
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" layout-fluid">
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
      <!-- Navbar -->
      <header class="navbar navbar-expand-md d-print-none" >
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="." >
              <img src="{{asset('/dist/img/favicon.jpeg')}}" width="110" height="32" alt="TechNest Billing" class="navbar-brand-image">
            </a>TechNest Billing
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            
            <div class="d-none d-md-flex">
              <a href="" class="nav-link px-0" title="Quick Draft" data-bs-toggle="tooltip"
		              data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-notes">   <path stroke="none" d="M0 0h24v24H0z" fill="none" /> <path d="M5 5a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2l0 -14" /><path d="M9 7l6 0" /><path d="M9 11l6 0" /><path d="M9 15l4 0" /></svg> </a>
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		              data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
              <div class="nav-item dropdown d-none d-md-flex me-3">
               <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Notification" data-bs-toggle="tooltip"
		              data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                  <span class="badge bg-red"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Last updates</h3>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 1</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              Change deprecated html tags to text decoration classes (#29604)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 2</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              justify-content:between ⇒ justify-content:space-between (#29734)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions show">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 3</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              Update change-version.js (#29736)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 4</a>
                            <div class="d-block text-muted text-truncate mt-n1">
                              Regenerate package-lock.json (#29730)
                            </div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url('{{ asset('dist/img/favicon.jpeg') }}')">
                  </span>
                <div class="d-none d-xl-block ps-2">
                  <div>Saurabhh kumar</div>
                  <div class="mt-1 small text-muted">Admin</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Status</a>
                <a href="./profile.html" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="./settings.html" class="dropdown-item">Settings</a>
                <a href="./sign-in.html" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item">
                  {{-- <a class="nav-link" href="{{ route('dashboard') }}" > --}}
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Dashboard
                    </span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle {{ request()->routeIs('customers.*','venders.*') ? 'active' : '' }}" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Masters
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">        
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-git-branch-check">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M5 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M5 6a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M15 6a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M7 8v8" />	<path d="M7 12h8a2 2 0 0 0 2 -2v-2" />	<path d="M15 19l2 2l4 -4" /></svg>
                                Account Master
                          </a>
                          <div class="dropdown-menu">
                            <a href="./sign-in.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock-dollar">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M13 21h-6a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10" />	<path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />	<path d="M8 11v-4a4 4 0 1 1 8 0v4" />	<path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />	<path d="M19 21v1m0 -8v1" /></svg>
                                Account
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-bank">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 21l18 0" />	<path d="M3 10l18 0" />	<path d="M5 6l7 -3l7 3" />	<path d="M4 10l0 11" />	<path d="M20 10l0 11" />	<path d="M8 14l0 3" />	<path d="M12 14l0 3" />	<path d="M16 14l0 3" /></svg>  
                                      Bank
                            </a>
                            <a href="./sign-in-illustration.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-transform">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 6a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />	<path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3" />	<path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3" />	<path d="M15 18a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                               Transporter
                            </a>
                          </div>
                        </div>
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-scatter-3d">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 20l9 -7" />	<path d="M12 3v10l9 7" />	<path d="M17 12v.015" />	<path d="M17 4.015v.015" />	<path d="M21 8.015v.015" />	<path d="M12 19.015v.015" />	<path d="M3 12.015v.015" />	<path d="M7 8.015v.015" />	<path d="M3 4.015v.015" /></svg>
                            Party Master
                          </a>
                          <div class="dropdown-menu">
                            <a href="{{ route('customers.index') }}" class="dropdown-item {{ request()->routeIs('customers.*') ? 'active' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-cog">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />	<path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />	<path d="M17.001 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />	<path d="M19.001 15.5v1.5" />	<path d="M19.001 21v1.5" />	<path d="M22.032 17.25l-1.299 .75" />	<path d="M17.27 20l-1.3 .75" />	<path d="M15.97 17.25l1.3 .75" />	<path d="M20.733 20l1.3 .75" /></svg>
                              Customer/Clients
                            </a>
                            <a href="{{ route('venders.index') }}"   class="dropdown-item {{ request()->routeIs('venders.*') ? 'active' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-empathize">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M9.5 5.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />	<path d="M12 21.368l5.095 -5.096a3.088 3.088 0 1 0 -4.367 -4.367l-.728 .727l-.728 -.727a3.088 3.088 0 1 0 -4.367 4.367l5.095 5.096" /></svg>
                                  Vender/Suppliers
                            </a>
                          </div>
                        </div>
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-factory-2">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 21h18" />	<path d="M5 21v-12l5 4v-4l5 4h4" />	<path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />	<path d="M9 17h1" />	<path d="M14 17h1" /></svg>
                            Item Master
                          </a>
                          <div class="dropdown-menu">
                            <a href="./sign-in.html" class="dropdown-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-blackberry">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M7 6a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" />	<path d="M6 12a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" />	<path d="M13 12a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" />	<path d="M14 6a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" />	<path d="M12 18a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" />	<path d="M20 15a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" />	<path d="M21 9a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1" /></svg>
                              Item
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 4h6v6h-6l0 -6" />	<path d="M14 4h6v6h-6l0 -6" />	<path d="M4 14h6v6h-6l0 -6" />	<path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                                Item Group
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category-plus">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 4h6v6h-6v-6" />	<path d="M14 4h6v6h-6v-6" />	<path d="M4 14h6v6h-6v-6" />	<path d="M14 17h6m-3 -3v6" /></svg>
                              Item Category
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-unity">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M14 3l6 4v7" />	<path d="M18 17l-6 4l-6 -4" />	<path d="M4 14v-7l6 -4" />	<path d="M4 7l8 5v9" />	<path d="M20 7l-8 5" /></svg>
                              Unit of Measure (UOM)
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                {{-- Transactions Start --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-transaction-rupee">                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />                    <path d="M21 12h-6h1a3 3 0 0 1 0 6h-1l3 3" />                    <path d="M15 15h6" />                    <path d="M3 5a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M7 5h8" /><path d="M7 5v8a3 3 0 0 0 3 3h1" /></svg> 
                      </span>
                    <span class="nav-link-title">
                      Transactions
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">        
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag-plus">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M12.5 21h-3.926a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304h11.339a2 2 0 0 1 1.977 2.304l-.263 1.708" />	<path d="M16 19h6" />	<path d="M19 16v6" />	<path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>
                            Sales
                          </a>
                          <div class="dropdown-menu">
                            <a href="{{route('sales.index')}}" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-invoice">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M14 3v4a1 1 0 0 0 1 1h4" />	<path d="M19 12v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-14a2 2 0 0 1 2 -2h7l5 5v4.25" /></svg>
                              Sales Invoice
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-command">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M7 9a2 2 0 1 1 2 -2v10a2 2 0 1 1 -2 -2h10a2 2 0 1 1 -2 2v-10a2 2 0 1 1 2 2h-10" /></svg>
                              Quatations
                            </a>
                            <a href="./sign-in-illustration.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-droplet-question">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M18.064 10.877l-4.89 -7.26c-.42 -.625 -1.287 -.803 -1.936 -.397a1.376 1.376 0 0 0 -.41 .397l-4.893 7.26c-1.695 2.838 -1.035 6.441 1.567 8.546c2.203 1.782 5.259 2.056 7.723 .82" />	<path d="M19 22v.01" />	<path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" /></svg>
                              Delivery Challan
                            </a>
                            <a href="./sign-in-illustration.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-truck-return">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M5 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />	<path d="M15 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />	<path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v6h-5l2 2m0 -4l-2 2" />	<path d="M9 17l6 0" />	<path d="M13 6h5l3 5v6h-2" /></svg>
                              Sales Return
                            </a>
                            <a href="./sign-in-illustration.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit-bulk">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 4a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-2" />	<path d="M3 11a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-2" />	<path d="M20.385 9.585a2.1 2.1 0 0 0 -2.97 -2.97l-6.415 6.385v3h3l6.385 -6.415" />	<path d="M16 8l3 3" />	<path d="M3 18a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-2" /></svg>
                              Bulk Invoice Update
                            </a>
                          </div>
                        </div>
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-plus">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M12.5 17h-6.5v-14h-2" />	<path d="M6 5l14 1l-.86 6.017m-2.64 .983h-10.5" />	<path d="M16 19h6" />	<path d="M19 16v6" /></svg>
                            Purchase
                          </a>
                          <div class="dropdown-menu">
                            <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-invoice">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M14 3v4a1 1 0 0 0 1 1h4" />	<path d="M19 12v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-14a2 2 0 0 1 2 -2h7l5 5v4.25" /></svg>
                              Purchase Bill
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-box">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />	<path d="M12 12l8 -4.5" />	<path d="M12 12l0 9" />	<path d="M12 12l-8 -4.5" /></svg>
                              Purchase Order
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-s-turn-left">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M19 7a2 2 0 1 1 0 -4a2 2 0 0 1 0 4" />	<path d="M17 5h-9.5a3.5 3.5 0 0 0 0 7h9a3.5 3.5 0 0 1 0 7h-13.5" />	<path d="M6 16l-3 3l3 3" /></svg>
                              Purchase Return
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                {{-- Transactions End --}}
                <li class="nav-item">
                  <a class="nav-link" href="./form-elements.html" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-dollar">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M13 21h-7a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" />	<path d="M16 3v4" />	<path d="M8 3v4" />	<path d="M4 11h12.5" />	<path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />	<path d="M19 21v1m0 -8v1" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Expenses
                    </span>
                  </a>
                </li>
                   {{-- CORE Accounting Start --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-abacus">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M5 3v18" />	<path d="M19 21v-18" />	<path d="M5 7h14" />	<path d="M5 15h14" />	<path d="M8 13v4" />	<path d="M11 13v4" />	<path d="M16 13v4" />	<path d="M14 5v4" />	<path d="M11 5v4" />	<path d="M8 5v4" />	<path d="M3 21h18" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Core Accounting
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">        
                        <div class="dropend">
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 14l6 0" /></svg>
                              Receipt
                            </a>
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 14l6 0" /></svg>
                              Payment
                            </a>
                            <a href="./sign-in-link.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 14l6 0" /></svg>
                              Contra Entry
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                   {{-- Core Accounting End --}}
                   {{-- Journal Start --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-notebook">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />	<path d="M13 8l2 0" />	<path d="M13 12l2 0" /></svg>                    </span>
                    <span class="nav-link-title">
                      Journal
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">        
                        <div class="dropend">
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-basket-discount">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M17 10l-2 -6" />	<path d="M7 10l2 -6" />	<path d="M12.5 20h-5.256a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.394 2.248" />	<path d="M13.856 13.254a2 2 0 1 0 -1.856 2.746" />	<path d="M16 21l5 -5" />	<path d="M21 21v.01" />	<path d="M16 16v.01" /></svg>
                              Journal Voucher
                            </a>
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-cancel">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M6 4v4" />	<path d="M6 12v8" />	<path d="M13.499 14.675a2 2 0 1 0 -1.499 3.325" />	<path d="M12 4v10" />	<path d="M12 18v2" />	<path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M18 4v1" />	<path d="M18 9v3" />	<path d="M16 19a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />	<path d="M17 21l4 -4" /></svg>
                              GST General Voucher
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                   {{-- Journal End --}}
                   {{-- Business Review Start --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-analyze">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" />	<path d="M4 13a8.1 8.1 0 0 0 15 3" />	<path d="M18 16a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />	<path d="M4 8a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />	<path d="M9 12a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>                    </span>
                    <span class="nav-link-title">
                      Business Review
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">        
                        <div class="dropend">
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />	<path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />	<path d="M9 17v-5" />	<path d="M12 17v-1" />	<path d="M15 17v-3" /></svg>
                                  Reports
                            </a>
                          <a href="./sign-in.html" class="dropdown-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-merge-alt-left">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M8 7l4 -4l4 4" />	<path d="M18 21v.01" />	<path d="M18 18.01v.01" />	<path d="M17 15.02v.01" />	<path d="M14 13.03v.01" />	<path d="M12 3v5.394a6.737 6.737 0 0 1 -3 5.606a6.737 6.737 0 0 0 -3 5.606v1.394" /></svg>
                              GST Compliance
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                   {{-- Business Review End --}}

                   {{-- Inventory Start --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-basket-down">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M17 10l-2 -6" />	<path d="M7 10l2 -6" />	<path d="M12 20h-4.756a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.349 1.989" />	<path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />	<path d="M19 16v6" />	<path d="M22 19l-3 3l-3 -3" /></svg>                    </span>
                    <span class="nav-link-title">
                      Inventory
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">        
                        <div class="dropend">
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-stack-plus">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M12 4l-8 4l8 4l8 -4l-8 -4" />	<path d="M4 12l8 4" />	<path d="M4 16l8 4" />	<path d="M16 19h6" />	<path d="M19 16v6" /></svg>
                                  Stock Adjustment    
                            </a>
                          <a href="./sign-in.html" class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rugby">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M14 15h-4v6h4v-6" />	<path d="M12 15v-4" />	<path d="M8 21h8" />	<path d="M19 3v8h-14v-8" /></svg>
                                  Stock Journal
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                   {{-- Inventory End --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M15 15l3.35 3.35" /><path d="M9 15l-3.35 3.35" /><path d="M5.65 5.65l3.35 3.35" /><path d="M18.35 5.65l-3.35 3.35" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Help
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-hours-24">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 13c.325 2.532 1.881 4.781 4 6" />	<path d="M20 11a8.1 8.1 0 0 0 -15.5 -2" />	<path d="M4 5v4h4" />	<path d="M12 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />	<path d="M18 15v2a1 1 0 0 0 1 1h1" />	<path d="M21 15v6" /></svg>
                      Customer Support
                    </a>
                    <a class="dropdown-item" href="./changelog.html">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />	<path d="M3 7l9 6l9 -6" /></svg>                      
                      E-Mail                   
                     </a>
                    <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />	<path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                      WhatsApp 
                    </a>
                    </a>
                  </div>
                </li>
              </ul>
              {{-- <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                <form action="./" method="get" autocomplete="off" novalidate>
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                    </span>
                    <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                  </div>
                </form>
              </div> --}}
            </div>
          </div>
        </div>
      </header>