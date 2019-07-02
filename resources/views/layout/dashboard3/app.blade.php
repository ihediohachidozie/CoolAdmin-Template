
<!DOCTYPE html>
<html lang="en">
    <head>

        @include('layout.dashboard3.inc.head')
    </head>
    <body class="animsition">
        <div class="page-wrapper">

            @include('layout.dashboard3.inc.header-desktop3')

            @yield('content')


            @include('layout.dashboard3.inc.footer')

        </div>
        </div>

            @include('layout.dashboard3.inc.footer-script')
    </body>
</html>
