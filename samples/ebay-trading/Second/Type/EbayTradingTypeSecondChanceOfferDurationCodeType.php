<?php
/**
 * Class file for EbayTradingTypeSecondChanceOfferDurationCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSecondChanceOfferDurationCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSecondChanceOfferDurationCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Days_1'
	 * Meta informations :
	 * 	- documentation : (in) 1 Day.
	 * @return string 'Days_1'
	 */
	const VALUE_DAYS_1 = 'Days_1';
	/**
	 * Constant for value 'Days_3'
	 * Meta informations :
	 * 	- documentation : (in) 3 Days.
	 * @return string 'Days_3'
	 */
	const VALUE_DAYS_3 = 'Days_3';
	/**
	 * Constant for value 'Days_5'
	 * Meta informations :
	 * 	- documentation : (in) 5 Days.
	 * @return string 'Days_5'
	 */
	const VALUE_DAYS_5 = 'Days_5';
	/**
	 * Constant for value 'Days_7'
	 * Meta informations :
	 * 	- documentation : (in) 7 Days.
	 * @return string 'Days_7'
	 */
	const VALUE_DAYS_7 = 'Days_7';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSecondChanceOfferDurationCodeType
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
		return in_array($_value,array(self::VALUE_DAYS_1,self::VALUE_DAYS_3,self::VALUE_DAYS_5,self::VALUE_DAYS_7,self::VALUE_CUSTOMCODE));
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