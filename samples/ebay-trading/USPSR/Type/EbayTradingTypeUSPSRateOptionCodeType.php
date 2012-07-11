<?php
/**
 * Class file for EbayTradingTypeUSPSRateOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUSPSRateOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeUSPSRateOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'USPSDiscounted'
	 * Meta informations :
	 * 	- documentation : USPS Discounted
	 * @return string 'USPSDiscounted'
	 */
	const VALUE_USPSDISCOUNTED = 'USPSDiscounted';
	/**
	 * Constant for value 'USPSRetail'
	 * Meta informations :
	 * 	- documentation : USPS Retail
	 * @return string 'USPSRetail'
	 */
	const VALUE_USPSRETAIL = 'USPSRetail';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeUSPSRateOptionCodeType
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
		return in_array($_value,array(self::VALUE_USPSDISCOUNTED,self::VALUE_USPSRETAIL,self::VALUE_CUSTOMCODE));
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