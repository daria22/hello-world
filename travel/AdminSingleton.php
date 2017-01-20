<?php

class AdminSingleton
{
	
	var $login;
	var $password;
	private static $instance = null;
    
    public static function getInstance ( )
    {
        if ( is_null ( self::$instance ) )
        {
            self::$instance = new AdminSingleton ("admin","123456");
        }
        
        return self::$instance;
    }
    
    private function __construct($login,$password)
    {
        $this->login = $login;
		$this->password = $password;
    }

}

?>