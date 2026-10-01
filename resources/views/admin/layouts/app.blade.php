<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
      <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="{{ asset('assets/iconsax/css/iconsax.css') }}">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
    @stack('styles')
</head>

<body class=" layout-fluid">

@include('admin.layouts.header')

{{-- @include('admin.layouts.sidebar') --}}

<div class="content">
    {{-- <div style="background-color: #e7ebfb; min-height: 100vh; padding: 20px;"> --}}
    @yield('content')
    {{-- </div> --}}
</div>

{{-- @yield('customer-modal') --}}

@include('admin.layouts.footer')

@if(session('success'))
<script>
    window.onload=function(){
        Swal.fire({
        icon:'success',
        title:'Success',
        text:"{{ session('success') }}"
        });
    }

</script>

@endif


<script src="{{ asset('assets/js/app.js') }}"></script>
{{-- <script src="{{ asset('dist/js/tabler.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @yield('script')
</body>
</html>