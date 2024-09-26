<!DOCTYPE html>
<html lang="EN">

<head>
    @include('layout.head')
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        {{-- tu includujem content --}}
        @include('layout.nav')
    </nav>
    <div class="container py-4">
        @yield('content')
    </div>
        @include('layout.footer')
</body>

</html>
