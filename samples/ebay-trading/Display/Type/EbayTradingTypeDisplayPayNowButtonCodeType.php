<?php
/**
 * Class file for EbayTradingTypeDisplayPayNowButtonCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisplayPayNowButtonCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisplayPayNowButtonCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ShowPayNowButtonForAllPaymentMethods'
	 * Meta informations :
	 * 	- documentation : Show PayNow Button For All Payment Methods
	 * @return string 'ShowPayNowButtonForAllPaymentMethods'
	 */
	const VALUE_SHOWPAYNOWBUTTONFORALLPAYMENTMETHODS = 'ShowPayNowButtonForAllPaymentMethods';
	/**
	 * Constant for value 'ShowPayNowButtonForPayPalOnly'
	 * Meta informations :
	 * 	- documentation : Show PayNow Button For PayPal Only
	 * @return string 'ShowPayNowButtonForPayPalOnly'
	 */
	const VALUE_SHOWPAYNOWBUTTONFORPAYPALONLY = 'ShowPayNowButtonForPayPalOnly';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisplayPayNowButtonCodeType
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
		return in_array($_value,array(self::VALUE_SHOWPAYNOWBUTTONFORALLPAYMENTMETHODS,self::VALUE_SHOWPAYNOWBUTTONFORPAYPALONLY,self::VALUE_CUSTOMCODE));
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