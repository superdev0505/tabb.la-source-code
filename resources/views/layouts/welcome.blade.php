<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta title & meta -->
    @meta

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../../asset/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../../asset/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #c2070b;
                background: linear-gradient(135deg, #8f22ad 0%, #c2070b 100%);
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                /*display: flex;*/
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .footer span {

                font-weight: 700;
                color: #white;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-family: 'Raleway', sans-serif;
            }
        </style>
        @yield('styles')
        <!-- Laravel variables for js -->
        @tojs
    </head>
    <body>
        <input type="hidden" name="user_token" id="user_token" @if (Auth::check()) value="{{ auth()->user()->api_token }}" @endif>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <!--  <a href="{{ route('protection.membership') }}">{{ __('views.welcome.member_area') }}</a> -->
                <a href="{{ url('/')  }}">
                    <img src="{{asset('tabb-icon2.png')}}">
                </a>
            </div>
            <div class="top-right links">
                <!--  <a href="{{ route('protection.membership') }}">{{ __('views.welcome.member_area') }}</a> -->
                <a href="{{ url('/adblockers') }}">{{ __('views.welcome.adblockers') }}</a>
                <a href="{{ url('/terms') }}">{{ __('views.welcome.terms') }}</a>
                <a href="{{ url('/privacy') }}">{{ __('views.welcome.privacy') }}</a>
                @if (Route::has('login'))
                    @if (!Auth::check())
                        @if(config('auth.users.registration'))
                            <a href="{{ url('/register') }}">{{ __('views.welcome.register') }}</a>
                        @endif
                        <a href="{{ url('/login') }}">{{ __('views.welcome.login') }}</a>
                    @else
                        @if(auth()->user()->hasRole('administrator'))
                            <a href="{{ url('/admin') }}">{{ __('views.welcome.admin') }}</a>
                        @endif
                        <a href="{{ url('/logout') }}">{{ __('views.welcome.logout') }}</a>
                    @endif
                @endif
            </div>

            <div class="content">
                @yield('content')
                <footer class="footer">
                    <div class="text-center">
                        <span>Copyright © <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script> tabb.la. All rights reserved.
                        </span>
                    </div> 
                </footer>
            </div>
        </div>
        <script src="../../asset/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="../../asset/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        @yield('scripts')
    </body>
</html>
