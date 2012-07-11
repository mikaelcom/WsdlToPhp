<?php
/**
 * Class file for EbayTradingTypePictureManagerSubscriptionLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerSubscriptionLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerSubscriptionLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Free'
	 * Meta informations :
	 * 	- documentation : (out) Free to Stores users.
	 * @return string 'Free'
	 */
	const VALUE_FREE = 'Free';
	/**
	 * Constant for value 'Level1'
	 * Meta informations :
	 * 	- documentation : (out) 10 MB of storage.
	 * @return string 'Level1'
	 */
	const VALUE_LEVEL1 = 'Level1';
	/**
	 * Constant for value 'Level2'
	 * Meta informations :
	 * 	- documentation : (out) 50 MB of storage.
	 * @return string 'Level2'
	 */
	const VALUE_LEVEL2 = 'Level2';
	/**
	 * Constant for value 'Level3'
	 * Meta informations :
	 * 	- documentation : (out) 125 MB of storage.
	 * @return string 'Level3'
	 */
	const VALUE_LEVEL3 = 'Level3';
	/**
	 * Constant for value 'Level4'
	 * Meta informations :
	 * 	- documentation : (out) 300 MB of storage.
	 * @return string 'Level4'
	 */
	const VALUE_LEVEL4 = 'Level4';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureManagerSubscriptionLevelCodeType
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
		return in_array($_value,array(self::VALUE_FREE,self::VALUE_LEVEL1,self::VALUE_LEVEL2,self::VALUE_LEVEL3,self::VALUE_LEVEL4,self::VALUE_CUSTOMCODE));
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