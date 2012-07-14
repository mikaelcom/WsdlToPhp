<?php
/**
 * Class file for PayPalTypePaymentReasonType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentReasonType
 * @date 14/07/2012
 */
class PayPalTypePaymentReasonType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Refund'
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'ReturnShipment'
	 * Meta informations :
	 * 	- documentation : Identifies a BA flow for return shipment
	 * @return string 'ReturnShipment'
	 */
	const VALUE_RETURNSHIPMENT = 'ReturnShipment';
	/**
	 * Constructor
	 * @return PayPalTypePaymentReasonType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_REFUND,self::VALUE_RETURNSHIPMENT));
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