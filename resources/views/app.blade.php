<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TutaSIAK - Academic Information System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="http://tutahosting.net/wp-content/uploads/2015/01/tutaico.png" type="image/x-icon" />
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://tutacare.github.io/tutapos/">TutaSIAK</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">{{trans('tuta.home')}}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Master <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/dashboard/admin/announcements') }}">{{trans('tuta.announcements')}}</a></li>
                          <li class="divider"></li>
                          <li><a href="{{ url('/dashboard/admin/days') }}">{{trans('tuta.days')}}</a></li>
                          <li><a href="{{ url('/dashboard/admin/exam-types') }}">{{trans('tuta.exam_types')}}</a></li>
                          <li><a href="{{ url('/dashboard/admin/religions') }}">{{trans('tuta.religions')}}</a></li>
                          <li class="divider"></li>
                          <li><a href="{{ url('/dashboard/admin/studies') }}">{{trans('tuta.studies')}}</a></li>
                          <li><a href="{{ url('/dashboard/admin/faculties') }}">{{trans('tuta.faculties')}}</a></li>
                          <li class="divider"></li>
                          <li><a href="{{ url('/dashboard/admin/lecturers') }}">{{trans('tuta.lecturers')}}</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">{{trans('tuta.login')}}</a></li>
                        <li><a href="{{ url('/auth/register') }}">{{trans('tuta.register')}}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}">Profile</a></li>

                                  <li><a href="{{ url('/dashboard/users') }}">Users</a></li>

                                <li class="divider"></li>
                                <li><a href="{{ url('/auth/logout') }}">{{trans('tuta.logout')}}</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="footer hidden-print">
      <div class="container">
        <p class="text-muted">You are using <a href="http://tutacare.github.io/tutapos">TutaSIAK</a> v0.1-alpha by <a href="https://twitter.com/tutacare">Irfan Mahfudz Guntur</a>.
        </p>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
