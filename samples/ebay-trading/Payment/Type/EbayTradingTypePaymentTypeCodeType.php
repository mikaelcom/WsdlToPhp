<?php
/**
 * Class file for EbayTradingTypePaymentTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePaymentTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Sale'
	 * Meta informations :
	 * 	- documentation : (out) The buyer paid the seller. Applicable to Half.com.
	 * @return string 'Sale'
	 */
	const VALUE_SALE = 'Sale';
	/**
	 * Constant for value 'Refund'
	 * Meta informations :
	 * 	- documentation : (out) The seller issued a refund to the buyer. Applicable to Half.com.
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'SellerDeniedPayment'
	 * Meta informations :
	 * 	- documentation : For eBay internal use.
	 * @return string 'SellerDeniedPayment'
	 */
	const VALUE_SELLERDENIEDPAYMENT = 'SellerDeniedPayment';
	/**
	 * Constant for value 'AdminReversal'
	 * Meta informations :
	 * 	- documentation : For eBay internal use.
	 * @return string 'AdminReversal'
	 */
	const VALUE_ADMINREVERSAL = 'AdminReversal';
	/**
	 * Constant for value 'AllOther'
	 * Meta informations :
	 * 	- documentation : All other payment types.
	 * @return string 'AllOther'
	 */
	const VALUE_ALLOTHER = 'AllOther';
	/**
	 * Constant for value 'RentalExtension'
	 * Meta informations :
	 * 	- documentation : (out) The buyer paid the seller for a rental extension. Applicable to Half.com only.
	 * @return string 'RentalExtension'
	 */
	const VALUE_RENTALEXTENSION = 'RentalExtension';
	/**
	 * Constant for value 'RentalBuyout'
	 * Meta informations :
	 * 	- documentation : (out) The buyer paid the seller for a rental buyout. Applicable to Half.com only.
	 * @return string 'RentalBuyout'
	 */
	const VALUE_RENTALBUYOUT = 'RentalBuyout';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePaymentTypeCodeType
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
		return in_array($_value,array(self::VALUE_SALE,self::VALUE_REFUND,self::VALUE_SELLERDENIEDPAYMENT,self::VALUE_ADMINREVERSAL,self::VALUE_ALLOTHER,self::VALUE_RENTALEXTENSION,self::VALUE_RENTALBUYOUT,self::VALUE_CUSTOMCODE));
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