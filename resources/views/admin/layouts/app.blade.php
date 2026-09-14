<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

@include('admin.layouts.header')

{{-- @include('admin.layouts.sidebar') --}}

<div class="content">

    @yield('content')

</div>

{{-- @yield('customer-modal') --}}

@include('admin.layouts.footer')

<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>