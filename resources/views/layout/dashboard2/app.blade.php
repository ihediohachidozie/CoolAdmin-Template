<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    @include('layout.dashboard2.inc.head')
</head>


    <body class="animsition">
        <div class="page-wrapper">
            <!-- aside begins -->
            @include('layout.dashboard2.inc.aside')

            <!-- aside ends -->

            <!--  page content -->
            
            <div class="page-container2">
                <!-- header-desktop2 begins -->
                @include('layout.dashboard2.inc.header-desktop')
                <!-- header-desktop2 ends -->

                <!-- aside2 begins -->
                @include('layout.dashboard2.inc.aside2')

                <!-- aside2 end -->
                <!-- section breadcrumb begins -->
                @include('layout.dashboard2.inc.breadcrumb')
                <!-- section breadcrumb end -->
                @yield('content')


            </div>
        </div>
            @include('layout.dashboard2.inc.footer-script')
    </body>
</html>