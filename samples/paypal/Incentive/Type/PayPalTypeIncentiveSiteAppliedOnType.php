<?php
/**
 * Class file for PayPalTypeIncentiveSiteAppliedOnType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveSiteAppliedOnType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveSiteAppliedOnType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN'
	 * @return string 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN'
	 */
	const VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN = 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN';
	/**
	 * Constant for value 'INCENTIVE-SITE-APPLIED-ON-MERCHANT'
	 * @return string 'INCENTIVE-SITE-APPLIED-ON-MERCHANT'
	 */
	const VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT = 'INCENTIVE-SITE-APPLIED-ON-MERCHANT';
	/**
	 * Constant for value 'INCENTIVE-SITE-APPLIED-ON-PAYPAL'
	 * @return string 'INCENTIVE-SITE-APPLIED-ON-PAYPAL'
	 */
	const VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL = 'INCENTIVE-SITE-APPLIED-ON-PAYPAL';
	/**
	 * Constructor
	 * @return PayPalTypeIncentiveSiteAppliedOnType
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
		return in_array($_value,array(self::VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN,self::VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT,self::VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL));
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