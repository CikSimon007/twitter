<!DOCTYPE html>
<html lang="EN">

<head>
    @include('inc.head')
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        {{-- tu includujem content --}}
        @include('inc.nav')
    </nav>
    <div class="container py-4">
        @yield('content')
    </div>
        @include('inc.footer')
</body>

</html>
