<?php
/**
 * Class file for EbayTradingTypeFeedbackRatingStarCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackRatingStarCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackRatingStarCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No graphic displayed, feedback score 0-9.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Yellow'
	 * Meta informations :
	 * 	- documentation : Yellow Star, feedback score 10-49.
	 * @return string 'Yellow'
	 */
	const VALUE_YELLOW = 'Yellow';
	/**
	 * Constant for value 'Blue'
	 * Meta informations :
	 * 	- documentation : Blue Star, feedback score 50-99.
	 * @return string 'Blue'
	 */
	const VALUE_BLUE = 'Blue';
	/**
	 * Constant for value 'Turquoise'
	 * Meta informations :
	 * 	- documentation : Turquoise Star, feedback score 100-499.
	 * @return string 'Turquoise'
	 */
	const VALUE_TURQUOISE = 'Turquoise';
	/**
	 * Constant for value 'Purple'
	 * Meta informations :
	 * 	- documentation : Purple Star, feedback score 500-999.
	 * @return string 'Purple'
	 */
	const VALUE_PURPLE = 'Purple';
	/**
	 * Constant for value 'Red'
	 * Meta informations :
	 * 	- documentation : Red Star, feedback score 1,000-4,999
	 * @return string 'Red'
	 */
	const VALUE_RED = 'Red';
	/**
	 * Constant for value 'Green'
	 * Meta informations :
	 * 	- documentation : Green Star, feedback score 5,000-9,999.
	 * @return string 'Green'
	 */
	const VALUE_GREEN = 'Green';
	/**
	 * Constant for value 'YellowShooting'
	 * Meta informations :
	 * 	- documentation : Yellow Shooting Star, feedback score 10,000-24,999.
	 * @return string 'YellowShooting'
	 */
	const VALUE_YELLOWSHOOTING = 'YellowShooting';
	/**
	 * Constant for value 'TurquoiseShooting'
	 * Meta informations :
	 * 	- documentation : Turquoise Shooting Star, feedback score 25,000-49,999.
	 * @return string 'TurquoiseShooting'
	 */
	const VALUE_TURQUOISESHOOTING = 'TurquoiseShooting';
	/**
	 * Constant for value 'PurpleShooting'
	 * Meta informations :
	 * 	- documentation : Purple Shooting Star, feedback score 50,000-99,999.
	 * @return string 'PurpleShooting'
	 */
	const VALUE_PURPLESHOOTING = 'PurpleShooting';
	/**
	 * Constant for value 'RedShooting'
	 * Meta informations :
	 * 	- documentation : Red Shooting Star, feedback score 100,000-499,999.
	 * @return string 'RedShooting'
	 */
	const VALUE_REDSHOOTING = 'RedShooting';
	/**
	 * Constant for value 'GreenShooting'
	 * Meta informations :
	 * 	- documentation : Green Shooting Star, feedback score 500,000-999,999.
	 * @return string 'GreenShooting'
	 */
	const VALUE_GREENSHOOTING = 'GreenShooting';
	/**
	 * Constant for value 'SilverShooting'
	 * Meta informations :
	 * 	- documentation : Silver Shooting Star, feedback score 1,000,000 and above.
	 * @return string 'SilverShooting'
	 */
	const VALUE_SILVERSHOOTING = 'SilverShooting';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFeedbackRatingStarCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_YELLOW,self::VALUE_BLUE,self::VALUE_TURQUOISE,self::VALUE_PURPLE,self::VALUE_RED,self::VALUE_GREEN,self::VALUE_YELLOWSHOOTING,self::VALUE_TURQUOISESHOOTING,self::VALUE_PURPLESHOOTING,self::VALUE_REDSHOOTING,self::VALUE_GREENSHOOTING,self::VALUE_SILVERSHOOTING,self::VALUE_CUSTOMCODE));
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