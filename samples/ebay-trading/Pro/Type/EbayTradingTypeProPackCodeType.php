<?php
/**
 * Class file for EbayTradingTypeProPackCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProPackCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeProPackCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : The listing feature is enabled for the site.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : The listing feature is disabled for the site.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'PowerSellerOnly'
	 * Meta informations :
	 * 	- documentation : The listing feature is restricted to PowerSellers.
	 * @return string 'PowerSellerOnly'
	 */
	const VALUE_POWERSELLERONLY = 'PowerSellerOnly';
	/**
	 * Constant for value 'TopRatedSellerOnly'
	 * Meta informations :
	 * 	- documentation : The listing feature is restricted to TopRatedSellers.
	 * @return string 'TopRatedSellerOnly'
	 */
	const VALUE_TOPRATEDSELLERONLY = 'TopRatedSellerOnly';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeProPackCodeType
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
		return in_array($_value,array(self::VALUE_ENABLED,self::VALUE_DISABLED,self::VALUE_POWERSELLERONLY,self::VALUE_TOPRATEDSELLERONLY,self::VALUE_CUSTOMCODE));
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