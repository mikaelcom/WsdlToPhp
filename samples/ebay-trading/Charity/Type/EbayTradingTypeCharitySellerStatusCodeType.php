<?php
/**
 * Class file for EbayTradingTypeCharitySellerStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharitySellerStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCharitySellerStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Suspended'
	 * Meta informations :
	 * 	- documentation : The seller's charity seller account is suspended.
	 * @return string 'Suspended'
	 */
	const VALUE_SUSPENDED = 'Suspended';
	/**
	 * Constant for value 'Registered'
	 * Meta informations :
	 * 	- documentation : The seller is a registered charity seller.
	 * @return string 'Registered'
	 */
	const VALUE_REGISTERED = 'Registered';
	/**
	 * Constant for value 'Closed'
	 * Meta informations :
	 * 	- documentation : The seller is no longer a registered charity seller. The account with the eBay Giving Works provider is closed.
	 * @return string 'Closed'
	 */
	const VALUE_CLOSED = 'Closed';
	/**
	 * Constant for value 'CreditCardExpired'
	 * Meta informations :
	 * 	- documentation : The credit card associated with a seller's charity seller account has expired.
	 * @return string 'CreditCardExpired'
	 */
	const VALUE_CREDITCARDEXPIRED = 'CreditCardExpired';
	/**
	 * Constant for value 'TokenExpired'
	 * Meta informations :
	 * 	- documentation : The token associated with a seller's charity seller account has expired.
	 * @return string 'TokenExpired'
	 */
	const VALUE_TOKENEXPIRED = 'TokenExpired';
	/**
	 * Constant for value 'CreditCardAboutToExpire'
	 * Meta informations :
	 * 	- documentation : The credit card associated with a seller's charity seller account will expire in 15 (or fewer) days.
	 * @return string 'CreditCardAboutToExpire'
	 */
	const VALUE_CREDITCARDABOUTTOEXPIRE = 'CreditCardAboutToExpire';
	/**
	 * Constant for value 'RegisteredNoCreditCard'
	 * Meta informations :
	 * 	- documentation : (deprecated) The seller is a registered charity seller, but has no credit card associated with the charity seller account. This value will be deprecated after e557, please use RegisteredDirectSeller or RegisteredNoPaymentMethod.
	 * @return string 'RegisteredNoCreditCard'
	 */
	const VALUE_REGISTEREDNOCREDITCARD = 'RegisteredNoCreditCard';
	/**
	 * Constant for value 'NotRegisteredLostDirectSellerStatus'
	 * Meta informations :
	 * 	- documentation : (in/out) The seller is no longer a registered charity seller and has lost direct seller status.
	 * @return string 'NotRegisteredLostDirectSellerStatus'
	 */
	const VALUE_NOTREGISTEREDLOSTDIRECTSELLERSTATUS = 'NotRegisteredLostDirectSellerStatus';
	/**
	 * Constant for value 'DirectDebitRejected'
	 * Meta informations :
	 * 	- documentation : (deprecated) The seller's direct debit card was rejected.
	 * @return string 'DirectDebitRejected'
	 */
	const VALUE_DIRECTDEBITREJECTED = 'DirectDebitRejected';
	/**
	 * Constant for value 'RegisteredDirectSeller'
	 * Meta informations :
	 * 	- documentation : The seller is a registered direct seller, but has no credit card associated with the charity seller account.
	 * @return string 'RegisteredDirectSeller'
	 */
	const VALUE_REGISTEREDDIRECTSELLER = 'RegisteredDirectSeller';
	/**
	 * Constant for value 'RegisteredNoPaymentMethod'
	 * Meta informations :
	 * 	- documentation : The seller is a registered charity seller with no donation payment method on file.
	 * @return string 'RegisteredNoPaymentMethod'
	 */
	const VALUE_REGISTEREDNOPAYMENTMETHOD = 'RegisteredNoPaymentMethod';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCharitySellerStatusCodeType
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
		return in_array($_value,array(self::VALUE_SUSPENDED,self::VALUE_REGISTERED,self::VALUE_CLOSED,self::VALUE_CREDITCARDEXPIRED,self::VALUE_TOKENEXPIRED,self::VALUE_CREDITCARDABOUTTOEXPIRE,self::VALUE_REGISTEREDNOCREDITCARD,self::VALUE_NOTREGISTEREDLOSTDIRECTSELLERSTATUS,self::VALUE_DIRECTDEBITREJECTED,self::VALUE_REGISTEREDDIRECTSELLER,self::VALUE_REGISTEREDNOPAYMENTMETHOD,self::VALUE_CUSTOMCODE));
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