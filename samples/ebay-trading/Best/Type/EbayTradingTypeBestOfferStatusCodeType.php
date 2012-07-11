<?php
/**
 * Class file for EbayTradingTypeBestOfferStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBestOfferStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBestOfferStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : The best offer is awaiting seller response or will naturally expire after 48 hours.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Accepted'
	 * Meta informations :
	 * 	- documentation : The best offer was accepted by the seller.
	 * @return string 'Accepted'
	 */
	const VALUE_ACCEPTED = 'Accepted';
	/**
	 * Constant for value 'Declined'
	 * Meta informations :
	 * 	- documentation : The best offer was rejected by the seller.
	 * @return string 'Declined'
	 */
	const VALUE_DECLINED = 'Declined';
	/**
	 * Constant for value 'Expired'
	 * Meta informations :
	 * 	- documentation : The best offer expired after 48 hours due to no action by the seller.
	 * @return string 'Expired'
	 */
	const VALUE_EXPIRED = 'Expired';
	/**
	 * Constant for value 'Retracted'
	 * Meta informations :
	 * 	- documentation : The best offer was retracted by the buyer.
	 * @return string 'Retracted'
	 */
	const VALUE_RETRACTED = 'Retracted';
	/**
	 * Constant for value 'AdminEnded'
	 * Meta informations :
	 * 	- documentation : The best offer was ended by an administrator.
	 * @return string 'AdminEnded'
	 */
	const VALUE_ADMINENDED = 'AdminEnded';
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : Retrieve active best offers only.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Countered'
	 * Meta informations :
	 * 	- documentation : Retrieve all counter best offers.
	 * @return string 'Countered'
	 */
	const VALUE_COUNTERED = 'Countered';
	/**
	 * Constant for value 'All'
	 * Meta informations :
	 * 	- documentation : Retrieve all best offers (including declined offers, etc.).
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBestOfferStatusCodeType
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
		return in_array($_value,array(self::VALUE_PENDING,self::VALUE_ACCEPTED,self::VALUE_DECLINED,self::VALUE_EXPIRED,self::VALUE_RETRACTED,self::VALUE_ADMINENDED,self::VALUE_ACTIVE,self::VALUE_COUNTERED,self::VALUE_ALL,self::VALUE_CUSTOMCODE));
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