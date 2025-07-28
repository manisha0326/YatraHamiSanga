<!doctype html>
<html lang="en">
  <style>
  html, body {
    height: 900px;
    overflow: hidden;
  }
  .app-main {
    height: 900px;
    overflow-y: auto;
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
      <!--begin::Footer-->
      {{-- <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2024&nbsp;
          <a href="https://userlte.io" class="text-decoration-none">userLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer> --}}
      <!--end::Footer-->
    </div>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(userLTE)-->
    <script src="{{asset('user/js/userlte.js')}}"></script>
  </body>
  <!--end::Body-->
</html>
