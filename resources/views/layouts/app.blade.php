<!DOCTYPE HTML>
<html>
<head>
    <title>Nibble</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="{{ URL::asset('css/ie/html5shiv.js') }}" defer></script>
    <script src="{{ URL::asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ URL::asset('js/jquery.dropotron.min.js') }}" defer></script>
    <script src="{{ URL::asset('js/skel.min.js') }}" defer></script>
    <script src="{{ URL::asset('js/skel-layers.min.js') }}" defer></script>
    <script src="{{ URL::asset('js/init.js') }}" defer></script>

    <link href="{{ URL::asset('css/skel.css') }}" rel="stylesheet type='text/css'"/>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet type='text/css'"/>
    <link href="{{ URL::asset('css/style-wide.css') }}" rel="stylesheet type='text/css'"/>

</head>
<body>

<!-- Wrapper -->
<div class="wrapper style1">

    <!-- Header -->
    <div id="header" class="skel-panels-fixed">
        <div id="logo">
            <h1><a href="{{ route("home") }}">Nibble</a></h1>
        </div>
        <nav id="nav">
            <ul>
                <li>Want to share your recipe?</li>
                <li><a href="">Log in</a></li>
                <li><a href="">Register</a></li>
            </ul>
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Copyright -->
<div id="copyright">
    <div class="container">
        <div class="copyright">
            <p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
            <ul class="icons">
                <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
                <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
                <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>