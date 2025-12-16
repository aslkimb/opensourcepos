<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Locale extends BaseConfig
{
    /**
     * Default Locale
     */
    public string $defaultLocale = 'en';

    /**
     * Supported Locales
     */
    public array $supportedLocales = ['en'];

    /**
     * Whether to trust the browser's language preference.
     */
    public bool $negotiateLocale = false;

    /**
     * Locale cookie name
     */
    public string $cookieName = 'ci_lang';

    /**
     * Segment index for locale in URL (if using segment negotiation)
     */
    public int $urlSegment = 1;
}
