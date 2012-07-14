<?php
/**
 * Class file for PayPalTypeReversalReasonCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReversalReasonCodeType
 * @date 14/07/2012
 */
class PayPalTypeReversalReasonCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'chargeback'
	 * @return string 'chargeback'
	 */
	const VALUE_CHARGEBACK = 'chargeback';
	/**
	 * Constant for value 'guarantee'
	 * @return string 'guarantee'
	 */
	const VALUE_GUARANTEE = 'guarantee';
	/**
	 * Constant for value 'buyer-complaint'
	 * @return string 'buyer-complaint'
	 */
	const VALUE_BUYER_COMPLAINT = 'buyer-complaint';
	/**
	 * Constant for value 'refund'
	 * @return string 'refund'
	 */
	const VALUE_REFUND = 'refund';
	/**
	 * Constant for value 'other'
	 * @return string 'other'
	 */
	const VALUE_OTHER = 'other';
	/**
	 * Constructor
	 * @return PayPalTypeReversalReasonCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_CHARGEBACK,self::VALUE_GUARANTEE,self::VALUE_BUYER_COMPLAINT,self::VALUE_REFUND,self::VALUE_OTHER));
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