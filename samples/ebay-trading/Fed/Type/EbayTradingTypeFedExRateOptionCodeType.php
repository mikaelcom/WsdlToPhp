<?php
/**
 * Class file for EbayTradingTypeFedExRateOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFedExRateOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFedExRateOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'FedExStandardList'
	 * Meta informations :
	 * 	- documentation : FedEx Standard List Rates
	 * @return string 'FedExStandardList'
	 */
	const VALUE_FEDEXSTANDARDLIST = 'FedExStandardList';
	/**
	 * Constant for value 'FedExCounter'
	 * Meta informations :
	 * 	- documentation : FedEx Counter Rates
	 * @return string 'FedExCounter'
	 */
	const VALUE_FEDEXCOUNTER = 'FedExCounter';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFedExRateOptionCodeType
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
		return in_array($_value,array(self::VALUE_FEDEXSTANDARDLIST,self::VALUE_FEDEXCOUNTER,self::VALUE_CUSTOMCODE));
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