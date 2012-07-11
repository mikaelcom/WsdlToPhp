<?php
/**
 * Class file for EbayTradingTypeItemConditionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemConditionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemConditionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'New'
	 * Meta informations :
	 * 	- documentation : The seller specified the Item Condition as New, or did not specify a condition. (Excludes items that the seller listed as Used.)
	 * @return string 'New'
	 */
	const VALUE_NEW = 'New';
	/**
	 * Constant for value 'Used'
	 * Meta informations :
	 * 	- documentation : The seller specified the Item Condition as Used, or did not specify a condition. (Excludes items that the seller listed as New.)
	 * @return string 'Used'
	 */
	const VALUE_USED = 'Used';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemConditionCodeType
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
		return in_array($_value,array(self::VALUE_NEW,self::VALUE_USED,self::VALUE_CUSTOMCODE));
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