<!DOCTYPE html>
<html lang="en">
@include('elements.head')
<body>
@include('elements.loader')
<div class="pcoded" id="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
    @include('elements.navbar')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            @include('elements.sidebar')
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            <div class="page-body">
                                <div class="row">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@include('elements.footer')
</body>
</html>
