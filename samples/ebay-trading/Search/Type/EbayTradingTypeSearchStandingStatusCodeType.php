<?php
/**
 * Class file for EbayTradingTypeSearchStandingStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSearchStandingStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSearchStandingStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Raised'
	 * Meta informations :
	 * 	- documentation : Your listings may receive higher placement in search results that are sorted by Best Match. You earn this standing when you provide excellent customer service to eBay buyers (such as good BuyerSatisfaction.Status and high detailed seller ratings). If you already have a raised search standing, you can still boost your ratings and increase the visibility of your items by maintaining or improving your customer service.
	 * @return string 'Raised'
	 */
	const VALUE_RAISED = 'Raised';
	/**
	 * Constant for value 'Standard'
	 * Meta informations :
	 * 	- documentation : Listings recieve standard placement in search results that are sorted by Best Match.
	 * @return string 'Standard'
	 */
	const VALUE_STANDARD = 'Standard';
	/**
	 * Constant for value 'Lowered'
	 * Meta informations :
	 * 	- documentation : Your listings may receive lower placement in search results that are sorted by Best Match. You earn this standing when you have not been successful in providing eBay buyers with the customer service they expect. You can still take positive steps to improve your customer service and increase your ratings.
	 * @return string 'Lowered'
	 */
	const VALUE_LOWERED = 'Lowered';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSearchStandingStatusCodeType
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
		return in_array($_value,array(self::VALUE_RAISED,self::VALUE_STANDARD,self::VALUE_LOWERED,self::VALUE_CUSTOMCODE));
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