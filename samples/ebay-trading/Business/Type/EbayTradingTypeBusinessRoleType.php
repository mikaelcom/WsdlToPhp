<?php
/**
 * Class file for EbayTradingTypeBusinessRoleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBusinessRoleType
 * @date 04/07/2012
 */
class EbayTradingTypeBusinessRoleType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Shopper'
	 * Meta informations :
	 * 	- documentation : This value indicates that the eBay user's account is a Partially Provisioned Account without buying and selling privileges on eBay.
	 * @return string 'Shopper'
	 */
	const VALUE_SHOPPER = 'Shopper';
	/**
	 * Constant for value 'FullMarketPlaceParticipant'
	 * Meta informations :
	 * 	- documentation : This value indicates that the eBay user's account is a fully provisioned account with buying and selling privileges on eBay.
	 * @return string 'FullMarketPlaceParticipant'
	 */
	const VALUE_FULLMARKETPLACEPARTICIPANT = 'FullMarketPlaceParticipant';
	/**
	 * Constructor
	 * @return EbayTradingTypeBusinessRoleType
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
		return in_array($_value,array(self::VALUE_SHOPPER,self::VALUE_FULLMARKETPLACEPARTICIPANT));
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