<?php
/**
 * Class file for EbayTradingTypeFlatRateInsuranceRangeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFlatRateInsuranceRangeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFlatRateInsuranceRangeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'FlatRateInsuranceRange1'
	 * Meta informations :
	 * 	- documentation : Range is 0.01 to 9.99
	 * @return string 'FlatRateInsuranceRange1'
	 */
	const VALUE_FLATRATEINSURANCERANGE1 = 'FlatRateInsuranceRange1';
	/**
	 * Constant for value 'FlatRateInsuranceRange2'
	 * Meta informations :
	 * 	- documentation : Range is 10.00 to 49.99
	 * @return string 'FlatRateInsuranceRange2'
	 */
	const VALUE_FLATRATEINSURANCERANGE2 = 'FlatRateInsuranceRange2';
	/**
	 * Constant for value 'FlatRateInsuranceRange3'
	 * Meta informations :
	 * 	- documentation : Range is 50.00 to 99.99
	 * @return string 'FlatRateInsuranceRange3'
	 */
	const VALUE_FLATRATEINSURANCERANGE3 = 'FlatRateInsuranceRange3';
	/**
	 * Constant for value 'FlatRateInsuranceRange4'
	 * Meta informations :
	 * 	- documentation : Range is 100.00 to 199.99
	 * @return string 'FlatRateInsuranceRange4'
	 */
	const VALUE_FLATRATEINSURANCERANGE4 = 'FlatRateInsuranceRange4';
	/**
	 * Constant for value 'FlatRateInsuranceRange5'
	 * Meta informations :
	 * 	- documentation : Range is 200.00 to 299.99
	 * @return string 'FlatRateInsuranceRange5'
	 */
	const VALUE_FLATRATEINSURANCERANGE5 = 'FlatRateInsuranceRange5';
	/**
	 * Constant for value 'FlatRateInsuranceRange6'
	 * Meta informations :
	 * 	- documentation : Range is 300.00 or greater
	 * @return string 'FlatRateInsuranceRange6'
	 */
	const VALUE_FLATRATEINSURANCERANGE6 = 'FlatRateInsuranceRange6';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFlatRateInsuranceRangeCodeType
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
		return in_array($_value,array(self::VALUE_FLATRATEINSURANCERANGE1,self::VALUE_FLATRATEINSURANCERANGE2,self::VALUE_FLATRATEINSURANCERANGE3,self::VALUE_FLATRATEINSURANCERANGE4,self::VALUE_FLATRATEINSURANCERANGE5,self::VALUE_FLATRATEINSURANCERANGE6,self::VALUE_CUSTOMCODE));
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