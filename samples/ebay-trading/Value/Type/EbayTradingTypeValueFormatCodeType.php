<?php
/**
 * Class file for EbayTradingTypeValueFormatCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValueFormatCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeValueFormatCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'FullDate'
	 * Meta informations :
	 * 	- documentation : A date in the string format YYYYMMDD
	 * @return string 'FullDate'
	 */
	const VALUE_FULLDATE = 'FullDate';
	/**
	 * Constant for value 'PartialDate'
	 * Meta informations :
	 * 	- documentation : A date in the format YYYYMM
	 * @return string 'PartialDate'
	 */
	const VALUE_PARTIALDATE = 'PartialDate';
	/**
	 * Constant for value 'Year'
	 * Meta informations :
	 * 	- documentation : A date in the format YYYY
	 * @return string 'Year'
	 */
	const VALUE_YEAR = 'Year';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeValueFormatCodeType
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
		return in_array($_value,array(self::VALUE_FULLDATE,self::VALUE_PARTIALDATE,self::VALUE_YEAR,self::VALUE_CUSTOMCODE));
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