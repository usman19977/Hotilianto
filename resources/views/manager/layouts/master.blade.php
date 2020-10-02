<!DOCTYPE html>
<html lang="en">
<head>
    @include('manager.layouts.partials.head')
</head>
<body>
@include('manager.layouts.partials.nav')

@yield('content')
@include('manager.layouts.partials.footer')
@include('manager.layouts.partials.footer-script')
</body>
