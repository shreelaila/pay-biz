<html lang="en-US" dir="ltr"
    data-navigation-type="default"
    data-navbar-horizontal-shape="slim" data-bs-theme="light">
    @include('includes.head')
<body>
    <main class="main" id="top">
        @include('includes.topbar')
        @yield('content')
    </main>
    {{-- @include('includes.footer') --}}

    @include('includes.scripts')
    @yield('inline')
    {{-- <x-alert></x-alert> --}}
</body>
</html>
