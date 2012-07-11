<?php
/**
 * Class file for EbayTradingTypeSortOrderCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSortOrderCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSortOrderCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Ascending'
	 * Meta informations :
	 * 	- documentation : The results will be sorted by the specified attribute in ascending (low to high) order.
	 * @return string 'Ascending'
	 */
	const VALUE_ASCENDING = 'Ascending';
	/**
	 * Constant for value 'Descending'
	 * Meta informations :
	 * 	- documentation : The results will be sorted by the specified attribute in descending (high to low) order.
	 * @return string 'Descending'
	 */
	const VALUE_DESCENDING = 'Descending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSortOrderCodeType
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
		return in_array($_value,array(self::VALUE_ASCENDING,self::VALUE_DESCENDING,self::VALUE_CUSTOMCODE));
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