<header>
    <div class="container">
        <div class="header-pictures">
            <div class="picture-pokrova header-element"></div>
            <div class="picture-templom-1 header-element"></div>
            <h1 class="picture-cross header-element">Görög Katolikus kereszt</h1>


            <div class="picture-templom-2 header-element"></div>
            <div class="picture-templom-3 header-element"></div>

            <div class="picture-templom-4 header-element"></div>
            <h1 class="header-element site-title">{{Setting::get('site-title')}}</h1>
        </div>
    </div>
</header>

<nav class="main-navbar">
    <div class="container">
        <ul>
            @include('_frontend.menu', array('items' => $mainMenu->roots()))
        </ul>
    </div>
</nav>