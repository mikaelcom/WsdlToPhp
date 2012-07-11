<?php
/**
 * Class file for EbayTradingTypeBidderStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidderStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBidderStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Approved'
	 * Meta informations :
	 * 	- documentation : Seller has approved the bidder.
	 * @return string 'Approved'
	 */
	const VALUE_APPROVED = 'Approved';
	/**
	 * Constant for value 'Denied'
	 * Meta informations :
	 * 	- documentation : Seller has denied the bidder's approval request.
	 * @return string 'Denied'
	 */
	const VALUE_DENIED = 'Denied';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : Seller has not yet approved or denied the bidder (or the status is still being processed).
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBidderStatusCodeType
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
		return in_array($_value,array(self::VALUE_APPROVED,self::VALUE_DENIED,self::VALUE_PENDING,self::VALUE_CUSTOMCODE));
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