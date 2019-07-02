<!DOCTYPE html>
<html lang="en">
    
@include('layout.dashboard.inc.head')


<body class="animsition">
    <div class="page-wrapper">
        @include('layout.dashboard.inc.header-mobile')

        @include('layout.dashboard.inc.aside')
  
        <!-- PAGE CONTAINER-->
        <div class="page-container">

            @include('layout.dashboard.inc.header-desktop')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    @include('layout.dashboard.inc.footer-script')
</body>

</html>
<!-- end document-->
