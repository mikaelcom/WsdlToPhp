<?php
/**
 * Class file for PayPalTypePendingStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePendingStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypePendingStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'echeck'
	 * @return string 'echeck'
	 */
	const VALUE_ECHECK = 'echeck';
	/**
	 * Constant for value 'intl'
	 * @return string 'intl'
	 */
	const VALUE_INTL = 'intl';
	/**
	 * Constant for value 'verify'
	 * @return string 'verify'
	 */
	const VALUE_VERIFY = 'verify';
	/**
	 * Constant for value 'address'
	 * @return string 'address'
	 */
	const VALUE_ADDRESS = 'address';
	/**
	 * Constant for value 'unilateral'
	 * @return string 'unilateral'
	 */
	const VALUE_UNILATERAL = 'unilateral';
	/**
	 * Constant for value 'other'
	 * @return string 'other'
	 */
	const VALUE_OTHER = 'other';
	/**
	 * Constant for value 'upgrade'
	 * @return string 'upgrade'
	 */
	const VALUE_UPGRADE = 'upgrade';
	/**
	 * Constant for value 'multi-currency'
	 * @return string 'multi-currency'
	 */
	const VALUE_MULTI_CURRENCY = 'multi-currency';
	/**
	 * Constant for value 'authorization'
	 * @return string 'authorization'
	 */
	const VALUE_AUTHORIZATION = 'authorization';
	/**
	 * Constant for value 'order'
	 * @return string 'order'
	 */
	const VALUE_ORDER = 'order';
	/**
	 * Constant for value 'payment-review'
	 * @return string 'payment-review'
	 */
	const VALUE_PAYMENT_REVIEW = 'payment-review';
	/**
	 * Constructor
	 * @return PayPalTypePendingStatusCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ECHECK,self::VALUE_INTL,self::VALUE_VERIFY,self::VALUE_ADDRESS,self::VALUE_UNILATERAL,self::VALUE_OTHER,self::VALUE_UPGRADE,self::VALUE_MULTI_CURRENCY,self::VALUE_AUTHORIZATION,self::VALUE_ORDER,self::VALUE_PAYMENT_REVIEW));
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