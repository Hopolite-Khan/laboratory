<?php
/**
 * Retrieve our Locale instance
 *
 * @return App\Locale
 */
function i18n()
{
    return app()->make(App\i18n::class);
}
