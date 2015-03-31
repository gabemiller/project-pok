<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">


    <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <title>{{Setting::get('site-title')}} @if(!empty($title)) {{'- '.$title }} @endif</title>

    <!--[if lt IE 9]>
    {{ HTML::script('//html5shim.googlecode.com/svn/trunk/html5.js') }}
    <![endif]-->
    {{
    HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext')
    }}
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
                <h1>Heti gondolat</h1>
                <blockquote class="quote-weekly">
                    <p>"Az Igét nem tette silányabbá, hogy ember lett. De minket jobbá tett, hogy hozzá tartozunk."
                        </p>
                    <small>Szent Ágoston</small>
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
