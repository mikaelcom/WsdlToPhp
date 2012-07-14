<?php
/**
 * Class file for PayPalTypeApprovalTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeApprovalTypeType
 * @date 14/07/2012
 */
class PayPalTypeApprovalTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BillingAgreement'
	 * @return string 'BillingAgreement'
	 */
	const VALUE_BILLINGAGREEMENT = 'BillingAgreement';
	/**
	 * Constant for value 'Profile'
	 * @return string 'Profile'
	 */
	const VALUE_PROFILE = 'Profile';
	/**
	 * Constructor
	 * @return PayPalTypeApprovalTypeType
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
		return in_array($_value,array(self::VALUE_BILLINGAGREEMENT,self::VALUE_PROFILE));
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