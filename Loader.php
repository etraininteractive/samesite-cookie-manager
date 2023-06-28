<?php 

namespace Etrain\SameSiteCookieManager;

class Loader{

    /**
     * Includes the same-sitecookie-loader only when it's required
     * Instance during plugins_loaded at the earliest
     *
     */
    public function __construct(){

        include_once( dirname(__FILE__) . '/samesite-cookie-manager.php' );

    }

} 