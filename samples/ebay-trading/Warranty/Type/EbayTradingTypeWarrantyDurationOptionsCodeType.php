<?php
/**
 * Class file for EbayTradingTypeWarrantyDurationOptionsCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarrantyDurationOptionsCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeWarrantyDurationOptionsCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Months_1'
	 * Meta informations :
	 * 	- documentation : 1 month
	 * @return string 'Months_1'
	 */
	const VALUE_MONTHS_1 = 'Months_1';
	/**
	 * Constant for value 'Months_3'
	 * Meta informations :
	 * 	- documentation : 3 months
	 * @return string 'Months_3'
	 */
	const VALUE_MONTHS_3 = 'Months_3';
	/**
	 * Constant for value 'Months_6'
	 * Meta informations :
	 * 	- documentation : 6 months
	 * @return string 'Months_6'
	 */
	const VALUE_MONTHS_6 = 'Months_6';
	/**
	 * Constant for value 'Years_1'
	 * Meta informations :
	 * 	- documentation : 1 year
	 * @return string 'Years_1'
	 */
	const VALUE_YEARS_1 = 'Years_1';
	/**
	 * Constant for value 'Years_2'
	 * Meta informations :
	 * 	- documentation : 2 years
	 * @return string 'Years_2'
	 */
	const VALUE_YEARS_2 = 'Years_2';
	/**
	 * Constant for value 'Years_3'
	 * Meta informations :
	 * 	- documentation : 3 years
	 * @return string 'Years_3'
	 */
	const VALUE_YEARS_3 = 'Years_3';
	/**
	 * Constant for value 'Years_MoreThan3'
	 * Meta informations :
	 * 	- documentation : More than 3 years
	 * @return string 'Years_MoreThan3'
	 */
	const VALUE_YEARS_MORETHAN3 = 'Years_MoreThan3';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeWarrantyDurationOptionsCodeType
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
		return in_array($_value,array(self::VALUE_MONTHS_1,self::VALUE_MONTHS_3,self::VALUE_MONTHS_6,self::VALUE_YEARS_1,self::VALUE_YEARS_2,self::VALUE_YEARS_3,self::VALUE_YEARS_MORETHAN3,self::VALUE_CUSTOMCODE));
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