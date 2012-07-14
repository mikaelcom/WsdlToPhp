<?php
/**
 * Class file for PayPalTypeFeedbackRatingStarCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFeedbackRatingStarCodeType
 * @date 14/07/2012
 */
class PayPalTypeFeedbackRatingStarCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No graphic displayed
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Yellow'
	 * Meta informations :
	 * 	- documentation : Yellow Star
	 * @return string 'Yellow'
	 */
	const VALUE_YELLOW = 'Yellow';
	/**
	 * Constant for value 'Turquoise'
	 * Meta informations :
	 * 	- documentation : Turquoise Star
	 * @return string 'Turquoise'
	 */
	const VALUE_TURQUOISE = 'Turquoise';
	/**
	 * Constant for value 'Purple'
	 * Meta informations :
	 * 	- documentation : Purple Star
	 * @return string 'Purple'
	 */
	const VALUE_PURPLE = 'Purple';
	/**
	 * Constant for value 'Red'
	 * Meta informations :
	 * 	- documentation : Red Star
	 * @return string 'Red'
	 */
	const VALUE_RED = 'Red';
	/**
	 * Constant for value 'Green'
	 * Meta informations :
	 * 	- documentation : Green Star
	 * @return string 'Green'
	 */
	const VALUE_GREEN = 'Green';
	/**
	 * Constant for value 'YellowShooting'
	 * Meta informations :
	 * 	- documentation : Yellow Shooting Star
	 * @return string 'YellowShooting'
	 */
	const VALUE_YELLOWSHOOTING = 'YellowShooting';
	/**
	 * Constant for value 'TurquoiseShooting'
	 * Meta informations :
	 * 	- documentation : Turquoise Shooting Star
	 * @return string 'TurquoiseShooting'
	 */
	const VALUE_TURQUOISESHOOTING = 'TurquoiseShooting';
	/**
	 * Constant for value 'PurpleShooting'
	 * Meta informations :
	 * 	- documentation : Purple Shooting Star
	 * @return string 'PurpleShooting'
	 */
	const VALUE_PURPLESHOOTING = 'PurpleShooting';
	/**
	 * Constant for value 'RedShooting'
	 * Meta informations :
	 * 	- documentation : Red Shooting Star
	 * @return string 'RedShooting'
	 */
	const VALUE_REDSHOOTING = 'RedShooting';
	/**
	 * Constant for value 'Blue'
	 * Meta informations :
	 * 	- documentation : Blue Star
	 * @return string 'Blue'
	 */
	const VALUE_BLUE = 'Blue';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeFeedbackRatingStarCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_YELLOW,self::VALUE_TURQUOISE,self::VALUE_PURPLE,self::VALUE_RED,self::VALUE_GREEN,self::VALUE_YELLOWSHOOTING,self::VALUE_TURQUOISESHOOTING,self::VALUE_PURPLESHOOTING,self::VALUE_REDSHOOTING,self::VALUE_BLUE,self::VALUE_CUSTOMCODE));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>