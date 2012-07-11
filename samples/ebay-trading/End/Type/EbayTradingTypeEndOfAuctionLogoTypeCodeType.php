<?php
/**
 * Class file for EbayTradingTypeEndOfAuctionLogoTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndOfAuctionLogoTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeEndOfAuctionLogoTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'WinningBidderNotice'
	 * Meta informations :
	 * 	- documentation : The PayPal Winning Bidder Notice logo.
	 * @return string 'WinningBidderNotice'
	 */
	const VALUE_WINNINGBIDDERNOTICE = 'WinningBidderNotice';
	/**
	 * Constant for value 'Store'
	 * Meta informations :
	 * 	- documentation : The seller's eBay Store logo.
	 * @return string 'Store'
	 */
	const VALUE_STORE = 'Store';
	/**
	 * Constant for value 'Customized'
	 * Meta informations :
	 * 	- documentation : A custom logo specified in LogoURL.
	 * @return string 'Customized'
	 */
	const VALUE_CUSTOMIZED = 'Customized';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : Indicates that no logo has been specified for use in the end of auction (EOA) email.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return EbayTradingTypeEndOfAuctionLogoTypeCodeType
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
		return in_array($_value,array(self::VALUE_WINNINGBIDDERNOTICE,self::VALUE_STORE,self::VALUE_CUSTOMIZED,self::VALUE_CUSTOMCODE,self::VALUE_NONE));
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