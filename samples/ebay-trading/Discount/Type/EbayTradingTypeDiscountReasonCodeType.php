<?php
/**
 * Class file for EbayTradingTypeDiscountReasonCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDiscountReasonCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDiscountReasonCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SpecialOffer'
	 * Meta informations :
	 * 	- documentation : An offer that applies to a limited number of listings during the offering period. Example: "There is no insertion fee for up to 5 auctions when listing between 12/1 and 12/10."
	 * @return string 'SpecialOffer'
	 */
	const VALUE_SPECIALOFFER = 'SpecialOffer';
	/**
	 * Constant for value 'Promotion'
	 * Meta informations :
	 * 	- documentation : An offer that applies to an unlimited number of listings during the offering period. Example: "Get subtitle for $0.10 in Tech category when listing between 12/25 and 12/28. No limit to the number of items listed during this period."
	 * @return string 'Promotion'
	 */
	const VALUE_PROMOTION = 'Promotion';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDiscountReasonCodeType
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
		return in_array($_value,array(self::VALUE_SPECIALOFFER,self::VALUE_PROMOTION,self::VALUE_CUSTOMCODE));
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