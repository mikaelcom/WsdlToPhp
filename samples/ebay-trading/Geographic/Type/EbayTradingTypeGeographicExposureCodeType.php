<?php
/**
 * Class file for EbayTradingTypeGeographicExposureCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGeographicExposureCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeGeographicExposureCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'National'
	 * Meta informations :
	 * 	- documentation : Seller can not opt into local exposure. It has to be national listing.
	 * @return string 'National'
	 */
	const VALUE_NATIONAL = 'National';
	/**
	 * Constant for value 'LocalOnly'
	 * Meta informations :
	 * 	- documentation : Seller can have Local listings only.
	 * @return string 'LocalOnly'
	 */
	const VALUE_LOCALONLY = 'LocalOnly';
	/**
	 * Constant for value 'LocalOptional'
	 * Meta informations :
	 * 	- documentation : This will allow national and local listing.
	 * @return string 'LocalOptional'
	 */
	const VALUE_LOCALOPTIONAL = 'LocalOptional';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeGeographicExposureCodeType
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
		return in_array($_value,array(self::VALUE_NATIONAL,self::VALUE_LOCALONLY,self::VALUE_LOCALOPTIONAL,self::VALUE_CUSTOMCODE));
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