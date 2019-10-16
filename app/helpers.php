<?php

/**
 * Retrieve `Locale` class instance.
 *
 * @return App\Locale
 */
function locale()
{
    return app()->make(App\Locale::class);
}
