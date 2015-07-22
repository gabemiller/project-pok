<?php

View::composer('index', function ($view) {
    $quote = \Divide\CMS\Quote::orderBy('created_at', 'desc')->first();

    $view->with('quote', $quote);
});