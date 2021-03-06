<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        {{--Title and Meta--}}
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <link href="../../asset/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../asset/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="../../asset/demo/default/media/img/logo/favicon.ico" />
    </head>
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-1" id="m_login" style="background: url(../../asset/app/media/img//bg/bg-1.jpg);">
                <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
                    <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
                        <div class="m-login__container">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="{{asset('tabb-icon2.png')}}">
                                </a>
                            </div>
                            {{--Page--}}
                            @yield('page')
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <script src="../../asset/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="../../asset/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    </body>
</html>
