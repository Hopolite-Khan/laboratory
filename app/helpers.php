<?php

use App\Services\Locale;

/**
 * Retrieve our Locale instance
 *
 * @return App\Locale
 */
function locale()
{
    return app()->make(Locale::class);
}
