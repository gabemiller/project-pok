<?php

View::composer('_frontend.master', function ($view) {
    $quote = \Divide\CMS\Quote::orderBy('created_at', 'desc')->first();

    $view->with('quote', $quote);
});