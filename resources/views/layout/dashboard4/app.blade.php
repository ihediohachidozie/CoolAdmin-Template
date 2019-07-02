
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.dashboard4.inc.head')
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            @include('layout.dashboard4.inc.header')
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">          
                        @include('layout.dashboard4.inc.aside')                       
                    </div>
                    <div class="col-xl-9">                       
                        <div class="page-content">
                            @yield('content')
                            @include('layout.dashboard4.inc.footer')
                        </div>
                        
                    </div>
                </div>
            </div>
            @include('layout.dashboard4.inc.footer-script')
    </body>
</html>
