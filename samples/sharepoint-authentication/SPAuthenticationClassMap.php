<?php
/**
 * ClassMap 
 * @date 06/07/2012
 */
/**
 * ClassMap
 * @date 06/07/2012
 */
class SPAuthenticationClassMap
{
	final public static function classMap()
	{
		return array (
  'Login' => 'SPAuthenticationTypeLogin',
  'LoginResponse' => 'SPAuthenticationTypeLoginResponse',
  'LoginResult' => 'SPAuthenticationTypeLoginResult',
  'Mode' => 'SPAuthenticationTypeMode',
  'ModeResponse' => 'SPAuthenticationTypeModeResponse',
);
	}
}
?>