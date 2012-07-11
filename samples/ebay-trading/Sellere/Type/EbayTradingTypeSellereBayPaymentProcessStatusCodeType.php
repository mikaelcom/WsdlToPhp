<?php
/**
 * Class file for EbayTradingTypeSellereBayPaymentProcessStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellereBayPaymentProcessStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellereBayPaymentProcessStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AcceptedUA'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE or AT seller has accepted the supplemental user agreement related to the new payment process, but the new payment process has yet to be fully implemented on the seller's account.
	 * @return string 'AcceptedUA'
	 */
	const VALUE_ACCEPTEDUA = 'AcceptedUA';
	/**
	 * Constant for value 'MustAcceptUA'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE or AT seller has yet to accept the supplemental user agreement related to the new payment process. If the new payment process has been fully implemented on the seller's account, this seller will be blocked from listing on the DE and AT sites until the user agreement is accepted.
	 * @return string 'MustAcceptUA'
	 */
	const VALUE_MUSTACCEPTUA = 'MustAcceptUA';
	/**
	 * Constant for value 'eBayPaymentProcessEnabled'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE or AT seller has accepted the supplemental user agreement related to the new payment process and the new payment process is fully implemented on the seller's account.
	 * @return string 'eBayPaymentProcessEnabled'
	 */
	const VALUE_EBAYPAYMENTPROCESSENABLED = 'eBayPaymentProcessEnabled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellereBayPaymentProcessStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACCEPTEDUA,self::VALUE_MUSTACCEPTUA,self::VALUE_EBAYPAYMENTPROCESSENABLED,self::VALUE_CUSTOMCODE));
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