<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>World Cup 2018 - Russia</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup 2018 - Russia">
        <meta name="author" content="code4milktea.com">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Theme CSS -->
        <link href="{{ asset_front('assets/css/main.css') }}" rel="stylesheet" media="screen">

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset_front('img/icons/favicon.ico') }} ">
        <link rel="apple-touch-icon" href="{{ asset_front('img/icons/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset_front('img/icons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset_front('img/icons/apple-touch-icon-114x114.png') }}">
        
    </head>

    <body>

        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header class="header-3">
                <!-- End headerbox-->
                <div class="headerbox">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <!-- Logo-->
                            <div class="col col-xl-12 text-center">
                               <div class="logo">
                                    <a href="https://www.fifa.com/worldcup/" title="Return Home">
                                        <img src="{{ asset_front('img/logo-wc-2018.png') }}" alt="Logo" class="logo_img">
                                    </a>
                                   <h1>TBV PREDICTION WORLD CUP 2018 TOURNAMENT</h1>
                                   <h5>TOURNAMENT STARTS IN:
                                       <h2><span id="days" class="text-danger">229</span> Days</h2>
                                       <span id="hours">22</span>:
                                       <span id="minutes">04</span>:
                                       <span id="seconds">26</span>
                                   </h5>
                               </div>
                            </div>
                            <!-- End Logo-->

                            <!-- Adds Header-->
                            <div class="col col-xl-12">
                                <!-- Call Nav Menu-->
                                <a class="mobile-nav" href="#mobile-nav"><i class="fa fa-bars"></i></a>
                                <!-- End Call Nav Menu-->
                            </div>
                            <!-- End Adds Header-->
                        </div>
                    </div>
                </div>
                <!-- End headerbox-->

                <!-- mainmenu-->
                <nav class="mainmenu">
                    <div class="container">
                        <!-- Menu-->
                        <ul class="sf-menu" id="menu">
                            <li class="current">
                                <a href="{{ route('front.home') }}">Home</a>
                            </li>
                            <li class="current"><a href="{{ route('front.matches') }}">Fixtures and Results</a></li>
                            <li class="current"><a href="{{ route('front.user_ranking') }}">User Ranking</a></li>
                            <li class="current"><a href="{{ route('front.group') }}">Groups</a></li>
                            <li class="current"><a href="{{ route('front.team') }}">Teams</a></li>
                            @if(!$isLogged)
                            <li>
                                
                                <form class="search" action="{{ route('auth.login') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input class="form-control" placeholder="username..." name="email" type="email" required="required" value="{{ old('email') }}">
                                        <input class="form-control" placeholder="password..." name="password" type="password" required="required">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="login" >Login</button>
                                        </span>
                                        @if ($errors->has('email') || $errors->has('password'))
                                        <label style="position: absolute;width: 100%;margin-top: 45px;" class="error text-danger" for="register-username">
                                            @if ($errors->has('email'))
                                            {{ $errors->first('email') }}
                                            @else
                                            {{ $errors->first('password') }}
                                            @endif
                                        </label>
                                        @endif
                                    </div>
                                </form>
                            </li>
                            @else
                            <li class="current">
                                <a href="">Hi, {{ $user->name }}</a>
                                <ul class="sub-current">
                                    <li>
                                        <a href="">Prediction history</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <!-- Logout button -->
                                <a href="{{ route('auth.logout') }}">Logout</a>
                                <!-- End logout button -->
                            </li>
                            @endif
                        </ul>
                        <!-- End Menu-->
                    </div>
                </nav>
                <!-- End mainmenu-->
            </header>
            <!-- End Header-->
            <!-- Mobile Nav-->
            <div id="mobile-nav">
                <!-- Menu-->
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">Home</a>
                    </li>
                    <li><a href="{{ route('front.team') }}">Teams</a></li>
                    <li><a href="{{ route('front.user_ranking') }}">Point Table</a></li>
                    <li><a href="{{ route('front.matches') }}">Fixtures</a></li>
                    <li><a href="{{ route('front.group') }}">Groups</a></li>
                    <li>
                        <a href="{{ route('front.result') }}">Results</a>
                    </li>
                </ul>
                <!-- End Menu-->
            </div>
            <!-- End Mobile Nav-->

            <!-- Section Area - Content Central -->
            <section class="content-info">
                @yield('content')
            </section>

            <!-- footer-->
            <footer id="footer" class="footer-3">
                <!-- footer Down-->
                <div class="dark-section paddings">
                    <div class="container">
                        <div class="row">
                            <!-- Top player -->
                            <div class="col-lg-4">
                               <div class="player-ranking">
                                    <h5><a href="group-list.html">Top players</a></h5>
                                    <div class="info-player">
                                        <ul>
                                            <li>
                                              <span class="position">
                                                  1
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/1.jpg') }}" alt="">
                                                    Cristiano R.
                                                </a>
                                                <span class="points">
                                                    90
                                                </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  2
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/2.jpg') }}" alt="">
                                                    Lionel Messi
                                                </a>
                                                <span class="points">
                                                    88
                                                </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  3
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/3.jpg') }}" alt="">
                                                    Neymar
                                                </a>
                                                <span class="points">
                                                    86
                                                </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  4
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/4.jpg') }}" alt="">
                                                    Luis SuÃ¡rez
                                                </a>
                                                <span class="points">
                                                  80
                                               </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  5
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/5.jpg') }}" alt="">
                                                    Gareth Bale
                                                </a>
                                                <span class="points">
                                                    76
                                                </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  6
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/6.jpg') }}" alt="">
                                                    Sergio AgÃ¼ero
                                                </a>
                                                <span class="points">
                                                    74
                                                </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  7
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/2.jpg') }}" alt="">
                                                    Jamez R.
                                                </a>
                                                <span class="points">
                                                    70
                                                </span>
                                            </li>

                                            <li>
                                              <span class="position">
                                                  8
                                              </span>
                                               <a href="single-team.html">
                                                    <img src="{{ asset_front('img/players/1.jpg') }}" alt="">
                                                     Falcao Garcia
                                                </a>
                                                <span class="points">
                                                    65
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                               </div>
                            </div>
                            <!-- End Top player -->

                            <div class="offset-lg-1 col-lg-7">
                                <iframe class="big-video" src="https://www.youtube.com/embed/hW3hnUoUS0k?rel=0&amp;start=7" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <!-- End footer-->
        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="{{ asset_front('assets/js/jquery.js') }}"></script>
        <!-- popper.js-->
        <script type="text/javascript" src="{{ asset_front('assets/js/popper.min.js') }}"></script>
        <!-- bootstrap.min.js-->
        <script type="text/javascript" src="{{ asset_front('assets/js/bootstrap.min.js') }}"></script>
        <!-- required-scripts.js-->
        <script type="text/javascript" src="{{ asset_front('assets/js/theme-scripts.js') }}"></script>
        <!-- theme-main.js-->
        <script type="text/javascript" src="{{ asset_front('assets/js/theme-main.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                countdown();
            });
            function countdown() {
                var now = new Date();
                var eventDate = new Date (2018,05,14);

                var currentTime = now.getTime();
                var eventTime = eventDate.getTime();

                var remTime = eventTime - currentTime;

                var s = Math.floor(remTime / 1000);
                var m = Math.floor(s / 60);
                var h = Math.floor(m / 60);
                var d = Math.floor(h / 24);

                h %= 24;
                m %= 60;
                s %= 60;

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                document.getElementById("days").textContent = d;
                document.getElementById("days").innerText = d;

                document.getElementById("hours").textContent = h;
                document.getElementById("minutes").textContent = m;
                document.getElementById("seconds").textContent = s;

                setTimeout(countdown, 1000);
            }
        </script>
        <!-- ======================= End JQuery libs =========================== -->
    </body>
</html>
