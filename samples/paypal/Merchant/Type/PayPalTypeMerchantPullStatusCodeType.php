<?php
/**
 * Class file for PayPalTypeMerchantPullStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchantPullStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypeMerchantPullStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Canceled'
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Constructor
	 * @return PayPalTypeMerchantPullStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_CANCELED));
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