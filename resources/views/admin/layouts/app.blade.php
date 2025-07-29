<!doctype html>
<html lang="en">
<style>
    html,
    body {
        height: 100%;
        overflow: auto;
    }

    .app-main {
        overflow-y: auto;
        min-height: 100vh;
    }

    .container {
        height: 100%;
    }
</style>

@include('admin.layouts.head')

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('admin.layouts.sidebar')

        <main class="app-main">

            <div class="container">
                @yield('adminContent')
            </div>

        </main>


    </div>

    <script src="{{ asset('admin/js/adminlte.js') }}"></script>
    @stack('scripts')
</body>
</html>
