<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Document')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/register.css')}}" rel="stylesheet">




    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>

<div>

    <div class="row">
        <div class="col-lg-2">

            <div class="logo">
                <a href="{{route('index')}}"><h3>alif academy<h3></a>

            </div>
            <nav>
                <ul class="nav nav-pills nav-stacked" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
                    <li role="presentation" class="active"><a tabindex="-1" href="{{route('index')}}">Главная</a></li>
                    <li role="presentation"><a tabindex="-1" href="{{route('students')}}">Студенты</a></li>
                    <li role="presentation"><a tabindex="-1" href="{{route('teachers')}}">Преподаватели</a></li>
                    <li role="presentation"><a tabindex="-1" href="{{route('courses')}}">Курсы</a></li>

                </ul>
            </nav>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-12">
                    <header>
                          <div class="row">
                              <div class="col-md-10"><br>
                                  <div class="container">
                                      <h4><script>var date =new Date(); var day = date.getDate(); var month =  date.getMonth(); year = date.getFullYear(); document.write(+day+'.'+month+'.'+year)</script></h4>
                                  </div>
                              </div>
                              <div class="col-md-2">
                                   <br>

                                  <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      Привет, {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          выход
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                    </div>

                              </div>
                          </div>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="col-12" style="padding-left: 20px">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>






</body>
</html>