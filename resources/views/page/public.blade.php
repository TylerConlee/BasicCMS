<html>
    <head>
        {!! Html::style('css/app.css')!!}
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">

                <div class="logo">
                    <a><img src="http://zurb.com/stickers/images/intro-foundation.png" /></a>
                </div>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                    <li class=""><a href="{{ URL::to('admin') }}">Admin</a></li>

                </ul>

            </section>
        </nav>
    <body>
        <div class="container">
            @yield('content')
        </div>
     {!! Html::script('js/app.js')!!}
    </body>

</html>