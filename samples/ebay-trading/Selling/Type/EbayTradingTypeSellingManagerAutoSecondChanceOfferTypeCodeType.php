<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'BidsGreaterThanAmount'
	 * Meta informations :
	 * 	- documentation : Sends a second chance offer to all bidders who bid more than a specific amount.
	 * @return string 'BidsGreaterThanAmount'
	 */
	const VALUE_BIDSGREATERTHANAMOUNT = 'BidsGreaterThanAmount';
	/**
	 * Constant for value 'BidsGreaterThanCostPlusAmount'
	 * Meta informations :
	 * 	- documentation : Sends a second chance offer to all bidders who bid more than the cost plus a specific amount.
	 * @return string 'BidsGreaterThanCostPlusAmount'
	 */
	const VALUE_BIDSGREATERTHANCOSTPLUSAMOUNT = 'BidsGreaterThanCostPlusAmount';
	/**
	 * Constant for value 'BidsGreaterThanCostPlusPercentage'
	 * Meta informations :
	 * 	- documentation : Sends a second chance offer to all bidders who bid more than the cost plus a specific percentage.
	 * @return string 'BidsGreaterThanCostPlusPercentage'
	 */
	const VALUE_BIDSGREATERTHANCOSTPLUSPERCENTAGE = 'BidsGreaterThanCostPlusPercentage';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType
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
		return in_array($_value,array(self::VALUE_BIDSGREATERTHANAMOUNT,self::VALUE_BIDSGREATERTHANCOSTPLUSAMOUNT,self::VALUE_BIDSGREATERTHANCOSTPLUSPERCENTAGE,self::VALUE_CUSTOMCODE));
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