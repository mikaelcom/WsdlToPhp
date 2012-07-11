<?php
/**
 * Class file for EbayTradingTypeReturnsWithinOptionsCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReturnsWithinOptionsCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeReturnsWithinOptionsCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Days_3'
	 * Meta informations :
	 * 	- documentation : 3 days<br> <br> This value is being deprecated in 2012. We recommend that you stop using this value. Beginning with version 759, a warning message will be returned if a listing is created or revised with this value. And starting in early May 2012, listings created or revised with this value will be blocked.
	 * @return string 'Days_3'
	 */
	const VALUE_DAYS_3 = 'Days_3';
	/**
	 * Constant for value 'Days_7'
	 * Meta informations :
	 * 	- documentation : 7 days<br> <br> This value is being deprecated in 2012. We recommend that you stop using this value. Beginning with version 759, a warning message will be returned if a listing is created or revised with this value. And starting in early May 2012, listings created or revised with this value will be blocked.
	 * @return string 'Days_7'
	 */
	const VALUE_DAYS_7 = 'Days_7';
	/**
	 * Constant for value 'Days_10'
	 * Meta informations :
	 * 	- documentation : 10 days
	 * @return string 'Days_10'
	 */
	const VALUE_DAYS_10 = 'Days_10';
	/**
	 * Constant for value 'Days_14'
	 * Meta informations :
	 * 	- documentation : 14 days
	 * @return string 'Days_14'
	 */
	const VALUE_DAYS_14 = 'Days_14';
	/**
	 * Constant for value 'Days_30'
	 * Meta informations :
	 * 	- documentation : 30 days
	 * @return string 'Days_30'
	 */
	const VALUE_DAYS_30 = 'Days_30';
	/**
	 * Constant for value 'Days_60'
	 * Meta informations :
	 * 	- documentation : 60 days
	 * @return string 'Days_60'
	 */
	const VALUE_DAYS_60 = 'Days_60';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeReturnsWithinOptionsCodeType
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
		return in_array($_value,array(self::VALUE_DAYS_3,self::VALUE_DAYS_7,self::VALUE_DAYS_10,self::VALUE_DAYS_14,self::VALUE_DAYS_30,self::VALUE_DAYS_60,self::VALUE_CUSTOMCODE));
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