<?php
/**
 * Class file for EbayTradingTypeUPSRateOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUPSRateOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeUPSRateOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'UPSDailyRates'
	 * Meta informations :
	 * 	- documentation : UPS Daily Rates
	 * @return string 'UPSDailyRates'
	 */
	const VALUE_UPSDAILYRATES = 'UPSDailyRates';
	/**
	 * Constant for value 'UPSOnDemandRates'
	 * Meta informations :
	 * 	- documentation : UPS On-Demand Rates
	 * @return string 'UPSOnDemandRates'
	 */
	const VALUE_UPSONDEMANDRATES = 'UPSOnDemandRates';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeUPSRateOptionCodeType
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
		return in_array($_value,array(self::VALUE_UPSDAILYRATES,self::VALUE_UPSONDEMANDRATES,self::VALUE_CUSTOMCODE));
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