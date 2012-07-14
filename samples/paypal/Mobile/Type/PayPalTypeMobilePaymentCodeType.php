<?php
/**
 * Class file for PayPalTypeMobilePaymentCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMobilePaymentCodeType
 * @date 14/07/2012
 */
class PayPalTypeMobilePaymentCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'P2P'
	 * @return string 'P2P'
	 */
	const VALUE_P2P = 'P2P';
	/**
	 * Constant for value 'HardGoods'
	 * @return string 'HardGoods'
	 */
	const VALUE_HARDGOODS = 'HardGoods';
	/**
	 * Constant for value 'Donation'
	 * @return string 'Donation'
	 */
	const VALUE_DONATION = 'Donation';
	/**
	 * Constant for value 'TopUp'
	 * @return string 'TopUp'
	 */
	const VALUE_TOPUP = 'TopUp';
	/**
	 * Constructor
	 * @return PayPalTypeMobilePaymentCodeType
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
		return in_array($_value,array(self::VALUE_P2P,self::VALUE_HARDGOODS,self::VALUE_DONATION,self::VALUE_TOPUP));
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