<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>{{Setting::get('site-title')}} @if(!empty($title)) {{'- '.$title }} @endif</title>

    <!--[if lt IE 9]>
    {{ HTML::script('//html5shim.googlecode.com/svn/trunk/html5.js') }}
    <![endif]-->
    {{HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/divide.min.css') }}

</head>
<body>

@include('_frontend.lightbox')
@include('_frontend.header')
<div class="container main-container">
    <div class="row">
        <div class="col-xs-12">
            @yield('breadcrumb')
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4">
            <aside class="side-bar">

                <img class="img-responsive"
                     src="{{URl::route('kep.show',['url'=>urlencode('assets/kep.jpg'),'width'=>300,'height'=>300]) }}"
                     alt="Kép"
                     title="Kép"/>

                <h1>Heti gondolat</h1>
                <blockquote class="quote-weekly">
                    <p>„…amikor lenyugszik a nap és végetér napunk, kell, hogy újra imádkozzunk, és
                        kérjük, hogy ismét felkeljen fölöttünk a fény, és kérjük azt is, hogy Krisztus
                        eljövetele az örök élet kegyelmét hozza meg nekünk…”
                        </p>
                    <small>Szent Cyprián</small>
                </blockquote>
                @yield('aside')
            </aside>
        </div>
        <div class="col-xs-8">
            @yield('content')
        </div>
    </div>
</div>
@include('_frontend.footer')


{{ HTML::script('js/jquery-2.1.1.min.js'); }}
{{ HTML::script('js/bootstrap.min.js'); }}
{{ HTML::script('js/divide.min.js'); }}

</body>
</html>
