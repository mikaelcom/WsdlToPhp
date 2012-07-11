<?php
/**
 * Class file for EbayTradingTypeSellerPIStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerPIStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerPIStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AcceptedUA'
	 * Meta informations :
	 * 	- documentation : This value indicates that the new DE or AT seller has accepted the user agreement related to the new payment process, but the new payment process has yet to be fully implemented on the seller's account. The new payment process for the DE and AT sites is scheduled to be implemented in late August 2011.
	 * @return string 'AcceptedUA'
	 */
	const VALUE_ACCEPTEDUA = 'AcceptedUA';
	/**
	 * Constant for value 'MustAcceptUA'
	 * Meta informations :
	 * 	- documentation : This value indicates that the new DE or AT seller has yet to accept the user agreement related to the new payment process. This new seller will be blocked from listing on the DE and AT sites until he accepts the user agreement. The new payment process for the DE and AT sites is scheduled to be implemented in late August 2011.
	 * @return string 'MustAcceptUA'
	 */
	const VALUE_MUSTACCEPTUA = 'MustAcceptUA';
	/**
	 * Constant for value 'PIEnabled'
	 * Meta informations :
	 * 	- documentation : This value indicates that the new DE or AT seller has accepted the user agreement related to the new payment process and the new payment process is fully implemented on the seller's account. The new payment process for the DE and AT sites is scheduled to be implemented in late August 2011.
	 * @return string 'PIEnabled'
	 */
	const VALUE_PIENABLED = 'PIEnabled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerPIStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACCEPTEDUA,self::VALUE_MUSTACCEPTUA,self::VALUE_PIENABLED,self::VALUE_CUSTOMCODE));
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