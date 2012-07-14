<?php
/**
 * Class file for PayPalTypeIncentiveTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Coupon'
	 * @return string 'Coupon'
	 */
	const VALUE_COUPON = 'Coupon';
	/**
	 * Constant for value 'eBayGiftCertificate'
	 * @return string 'eBayGiftCertificate'
	 */
	const VALUE_EBAYGIFTCERTIFICATE = 'eBayGiftCertificate';
	/**
	 * Constant for value 'eBayGiftCard'
	 * @return string 'eBayGiftCard'
	 */
	const VALUE_EBAYGIFTCARD = 'eBayGiftCard';
	/**
	 * Constant for value 'PayPalRewardVoucher'
	 * @return string 'PayPalRewardVoucher'
	 */
	const VALUE_PAYPALREWARDVOUCHER = 'PayPalRewardVoucher';
	/**
	 * Constant for value 'MerchantGiftCertificate'
	 * @return string 'MerchantGiftCertificate'
	 */
	const VALUE_MERCHANTGIFTCERTIFICATE = 'MerchantGiftCertificate';
	/**
	 * Constant for value 'eBayRewardVoucher'
	 * @return string 'eBayRewardVoucher'
	 */
	const VALUE_EBAYREWARDVOUCHER = 'eBayRewardVoucher';
	/**
	 * Constructor
	 * @return PayPalTypeIncentiveTypeCodeType
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
		return in_array($_value,array(self::VALUE_COUPON,self::VALUE_EBAYGIFTCERTIFICATE,self::VALUE_EBAYGIFTCARD,self::VALUE_PAYPALREWARDVOUCHER,self::VALUE_MERCHANTGIFTCERTIFICATE,self::VALUE_EBAYREWARDVOUCHER));
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