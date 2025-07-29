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

    .containerrrr {
        height: 100%;
    }
</style>
<!--begin::Head-->
@include('user.layouts.head')
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('user.layouts.navbar')
        <!--end::Header-->
        <!--begin::Sidebar-->
        @include('user.layouts.sidebar')
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="container">
                @yield('userContent')
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->

    </div>
    <script src="{{ asset('admin/js/adminlte.js') }}"></script>
</body>
<!--end::Body-->

</html>
