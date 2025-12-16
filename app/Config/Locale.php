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
     * If true, localization will be determined from the HTTP request
     */
    public bool $negotiateLocale = false;

    /**
     * The name of the query parameter for language switching
     */
    public string $supportedLocalesList = 'lang';

    /**
     * The name of the cookie for language switching
     */
    public string $cookieName = 'ci_session';
}
