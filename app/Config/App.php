<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Session\Handlers\FileHandler;

class App extends BaseConfig
{
    
    public $baseURL = 'http://localhost/! portfolio-only !/public/';

    public $indexPage = 'index.php';

    public $uriProtocol = 'REQUEST_URI';

    
    public $defaultLocale = 'en';

    
    public $negotiateLocale = false;

    
    public $supportedLocales = ['en'];

    ! portfolio-only !
}
