<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>. PurpleDash .</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Main App Styles -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='{{URL::asset("/css/styles.css")}}' rel="stylesheet" type="text/css">
    <!-- Main App Styles -->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/adminPanel.css')}}">
    <link href="{{URL::asset('js/iconPicker/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    PurpleDash
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/admin') }}">Home</a></li>
                    @if (Auth::user())
                    <li>
                         <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                              Views <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="{{route('admin.services.index')}}">Services</a></li>
                                <li><a href="{{route('admin.phrases.index')}}">Phrases</a></li>
                                <li><a href="{{route('admin.works.index')}}">Works</a></li>
                            </ul>
                        </li>
                    </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Options <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}" target="_blank"><i class="fa fa-btn fa-desktop"></i>Go to page</a></li>
                                <li><a href="{{ route('admin.password') }}"><i class="fa fa-btn fa-keyboard-o"></i>Change password</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script src="https://use.fontawesome.com/011b552131.js"></script>
    <script src="{{URL::asset('js/iconPicker/js/fontawesome-iconpicker.js')}}"></script>

    <script type="text/javascript">
        $('.iconpicker').iconpicker();
        // Dynamic Modal //

        $('#portfolio-modal').on('show.bs.modal', function(event){
            var me = $(event.relatedTarget);
            var mainimg = me.data('mainimg');
            var title = me.data('title');
            var desc = me.data('desc');
            var modal = $(this);

            modal.find('.work-title').text(title);
            modal.find('.work-description').text(desc)
            modal.find('.photos img').attr('src', '../../img/'+mainimg);

        });
        // Dynamic Modal End //
    </script>
</body>
</html>