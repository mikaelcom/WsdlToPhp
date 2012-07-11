<?php
/**
 * Class file for EbayTradingTypeBuyerSatisfactionStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerSatisfactionStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerSatisfactionStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Excellent'
	 * Meta informations :
	 * 	- documentation : You are doing an excellent job as an eBay seller. Be sure to continue providing members with a positive buying experience. A buyer satisfaction rating of Excellent ensures that you are eligible for eBay incentives.
	 * @return string 'Excellent'
	 */
	const VALUE_EXCELLENT = 'Excellent';
	/**
	 * Constant for value 'Good'
	 * Meta informations :
	 * 	- documentation : You are doing a good job as an eBay seller. Buyers have been satisfied with your customer service. Be sure to continue providing members with a positive buying experience. A buyer satisfaction rating of Good ensures that you are eligible for eBay incentives.
	 * @return string 'Good'
	 */
	const VALUE_GOOD = 'Good';
	/**
	 * Constant for value 'NeedsWork'
	 * Meta informations :
	 * 	- documentation : You are doing a mediocre job as an eBay seller. Some of your buyers have not been satisfied with your service. Improve your customer service to earn a higher buyer satisfaction rating.
	 * @return string 'NeedsWork'
	 */
	const VALUE_NEEDSWORK = 'NeedsWork';
	/**
	 * Constant for value 'Poor'
	 * Meta informations :
	 * 	- documentation : You are not doing a good job as an eBay seller. Some of your buyers have not been satisfied with your service. Improve your customer service to earn a higher buyer satisfaction rating. If your customer service continues to receive poor responses from customers, your buyer satisfaction rating can drop and could put your eBay seller's account at risk.
	 * @return string 'Poor'
	 */
	const VALUE_POOR = 'Poor';
	/**
	 * Constant for value 'VeryPoor'
	 * Meta informations :
	 * 	- documentation : You are doing a very poor job as an eBay seller. You need to improve your selling practices immediately. Too many of your customers have not been satisfied with your customer service and you are at risk of losing your eBay account.
	 * @return string 'VeryPoor'
	 */
	const VALUE_VERYPOOR = 'VeryPoor';
	/**
	 * Constant for value 'Unacceptable'
	 * Meta informations :
	 * 	- documentation : You are doing an unacceptable job as an eBay seller. Improve your selling practices immediately. Your account may be suspended because of your unacceptable customer service.
	 * @return string 'Unacceptable'
	 */
	const VALUE_UNACCEPTABLE = 'Unacceptable';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBuyerSatisfactionStatusCodeType
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
		return in_array($_value,array(self::VALUE_EXCELLENT,self::VALUE_GOOD,self::VALUE_NEEDSWORK,self::VALUE_POOR,self::VALUE_VERYPOOR,self::VALUE_UNACCEPTABLE,self::VALUE_CUSTOMCODE));
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