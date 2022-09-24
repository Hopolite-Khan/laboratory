<?php

use App\Services\Locale;

/**
 * Retrieve our Locale instance
 *
 * @return App\Locale
 */
function i18n()
{
    return app()->make(Locale::class);
}
