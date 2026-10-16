<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <link rel="icon" type="image/png" href="{{ asset('dist/img/favicon.png') }}">
    <!-- CSS files -->
    <link href="{{asset('dist/css/tabler.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-flags.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-payments.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-vendors.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/demo.min.css?1684106062')}}" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <style>
      #vanta-bg {
          position: fixed;
          width:100%;
          height:100%;
          top:0;
          left:0;
          z-index:0;
          pointer-events:none;   /* Important */
        }
      body {
          background:#102A43;
      }
      .card,
button,
a,
input {

    position:relative;

    z-index:3;

}
        /* Keep login above animation */

        .page-center {
            position:relative;
            z-index:2;
        }
        .glass-card {
            background:rgba(255,255,255,0.15) !important;
            backdrop-filter:blur(18px);
            -webkit-backdrop-filter:blur(18px);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius:20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        }
        /* login text css */
        .glass-card h2 {
            color:#ffffff;
        }
        .glass-card .form-label {
            color:#ffffff;
        }
      .glass-card .text-muted {
          color:#ffffff !important;
      }
      /* glass input css */
      .glass-card .form-control {
        background: rgba(255,255,255,0.18);
        border:1px solid rgba(255,255,255,0.35);
        color:#ffffff;
      }
      .glass-card .form-control::placeholder {
        color:rgba(255,255,255,0.75);
      }
      .glass-card .form-control:focus {
        background: rgba(255,255,255,0.25);
        border-color:#EB5A25;
      }
      /* orange btn css */
      .btn-orange {
        background:#EB5A25;
        color:white;
        border:none;
        font-weight:600;
        transition:.3s;
      }
      .btn-orange:hover {
        background:#D9480F;
        transform:translateY(-2px);
      }
      #vanta-bg::after {
      content:"";
      position:absolute;
      width:400px;
      height:400px;
      background:#EB5A25;
      filter:blur(180px);
      opacity:.25;
      right:10%;
      top:20%;
      }
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class="d-flex flex-column">
    {{-- <div id="vanta-bg"> --}}
      <script src="./dist/js/demo-theme.min.js?1684106062"></script>
      <div class="page page-center">
        <div class="container container-tight py-4">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
          </div>
          <div class="card card-md glass-card">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Register Your Account</h2>
              {{-- <form action="{{ route('dashboard') }}" method="get" autocomplete="off" novalidate> --}}
              <form action="" method="post" autocomplete="off" novalidate>
                @csrf
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                </div>
                <div class="mb-2">
                  <label class="form-label">
                    Password
                    <span class="form-label-description" >
                      <a href="./forgot-password.html"style="color:#ffffff">I forgot password</a>
                    </span>
                  </label>
                  <div class="input-group input-group-flat">
                    <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off">
                    <span class="input-group-text">
                      <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                      </a>
                    </span>
                  </div>
                </div>
                <div class="mb-2">
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input"/>
                    <span class="form-check-label">Remember me on this device</span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-orange w-100">Register</button>
                </div>
              </form>
            </div>
           
          </div>
          <div class="text-center text-muted mt-3">
            Don't have account yet? <a href="" method="get" tabindex="-1">Sign In</a>
          </div>
        </div>
      </div>
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
    </div>
      <script>
        VANTA.BIRDS({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200,
            minWidth: 200,
            scale: 1,
            scaleMobile: 1,
            backgroundColor: 0x102A43,
            color1: 0xEB5A25,
            color2: 0xffffff,
            birdSize: 1.5,
            wingSpan: 25,
            speedLimit: 5,
            separation: 50,
            alignment: 50,
            cohesion: 50,
            quantity: 3
        });
     </script>
  </body>
</html>
