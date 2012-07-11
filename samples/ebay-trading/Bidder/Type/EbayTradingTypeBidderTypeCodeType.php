<?php
/**
 * Class file for EbayTradingTypeBidderTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidderTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBidderTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AllBidder'
	 * Meta informations :
	 * 	- documentation : (in) Retrieve all bidders for ended or open listings.
	 * @return string 'AllBidder'
	 */
	const VALUE_ALLBIDDER = 'AllBidder';
	/**
	 * Constant for value 'HighBidder'
	 * Meta informations :
	 * 	- documentation : (in) Retrieve all high bidders.
	 * @return string 'HighBidder'
	 */
	const VALUE_HIGHBIDDER = 'HighBidder';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBidderTypeCodeType
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
		return in_array($_value,array(self::VALUE_ALLBIDDER,self::VALUE_HIGHBIDDER,self::VALUE_CUSTOMCODE));
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