<?php
/**
 * Class file for EbayTradingTypePaymentMethodSearchCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentMethodSearchCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePaymentMethodSearchCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : PayPal payment method.
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'PaisaPay'
	 * Meta informations :
	 * 	- documentation : PaisaPay payment method. The PaisaPay payment method is only for the India site (site ID 203).
	 * @return string 'PaisaPay'
	 */
	const VALUE_PAISAPAY = 'PaisaPay';
	/**
	 * Constant for value 'PayPalOrPaisaPay'
	 * Meta informations :
	 * 	- documentation : Either the PayPal or the PaisaPay payment method. The PaisaPay payment method is only for the India site (site ID 203).
	 * @return string 'PayPalOrPaisaPay'
	 */
	const VALUE_PAYPALORPAISAPAY = 'PayPalOrPaisaPay';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'PaisaPayEscrowEMI'
	 * Meta informations :
	 * 	- documentation : PaisaPayEscrowEMI (Equal Monthly Installments) payment method. The PaisaPayEscrowEMI payment method is only for the India site (site ID 203).
	 * @return string 'PaisaPayEscrowEMI'
	 */
	const VALUE_PAISAPAYESCROWEMI = 'PaisaPayEscrowEMI';
	/**
	 * Constructor
	 * @return EbayTradingTypePaymentMethodSearchCodeType
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
		return in_array($_value,array(self::VALUE_PAYPAL,self::VALUE_PAISAPAY,self::VALUE_PAYPALORPAISAPAY,self::VALUE_CUSTOMCODE,self::VALUE_PAISAPAYESCROWEMI));
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