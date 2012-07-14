<?php
/**
 * Class file for PayPalTypeApprovalSubTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeApprovalSubTypeType
 * @date 14/07/2012
 */
class PayPalTypeApprovalSubTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MerchantInitiatedBilling'
	 * @return string 'MerchantInitiatedBilling'
	 */
	const VALUE_MERCHANTINITIATEDBILLING = 'MerchantInitiatedBilling';
	/**
	 * Constructor
	 * @return PayPalTypeApprovalSubTypeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_MERCHANTINITIATEDBILLING));
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