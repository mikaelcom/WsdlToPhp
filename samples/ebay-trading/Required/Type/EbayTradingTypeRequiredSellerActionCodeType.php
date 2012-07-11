<?php
/**
 * Class file for EbayTradingTypeRequiredSellerActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRequiredSellerActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRequiredSellerActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ResolveeBPCase'
	 * Meta informations :
	 * 	- documentation : This value indicates that there is an open eBay Buyer Protection case involving the DE/AT seller and the item. The seller must address and get the case resolved before the funds can be scheduled for release to the seller's account. See the <a href="http://developer.ebay.com/DevZone/resolution-case-management/Concepts/ResoCaseAPIGuide.html">Resolution Case Management API User Guide</a> for information about retrieving and managing eBay Buyer Protection cases.
	 * @return string 'ResolveeBPCase'
	 */
	const VALUE_RESOLVEEBPCASE = 'ResolveeBPCase';
	/**
	 * Constant for value 'MarkAsShipped'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE/AT seller must mark the order line item as shipped. The seller can use the CompleteSale call to perform this action.
	 * @return string 'MarkAsShipped'
	 */
	const VALUE_MARKASSHIPPED = 'MarkAsShipped';
	/**
	 * Constant for value 'ContacteBayCS'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE/AT seller should contact eBay Customer Support to discover the next required action.
	 * @return string 'ContacteBayCS'
	 */
	const VALUE_CONTACTEBAYCS = 'ContacteBayCS';
	/**
	 * Constant for value 'ResolvePPPIcase'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE/AT seller must resolve PayPal Buyer Protection case.
	 * @return string 'ResolvePPPIcase'
	 */
	const VALUE_RESOLVEPPPICASE = 'ResolvePPPIcase';
	/**
	 * Constant for value 'SetupPayoutMethod'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE/AT seller must set up a valid payout account in order to receive seller payouts.
	 * @return string 'SetupPayoutMethod'
	 */
	const VALUE_SETUPPAYOUTMETHOD = 'SetupPayoutMethod';
	/**
	 * Constant for value 'UpdatePayoutMethod'
	 * Meta informations :
	 * 	- documentation : This value indicates that the DE/AT seller must update to a valid payout account in order to receive seller payouts.
	 * @return string 'UpdatePayoutMethod'
	 */
	const VALUE_UPDATEPAYOUTMETHOD = 'UpdatePayoutMethod';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : This value indicates that there is no action required from the DE/AT seller to expedite seller payouts.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRequiredSellerActionCodeType
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
		return in_array($_value,array(self::VALUE_RESOLVEEBPCASE,self::VALUE_MARKASSHIPPED,self::VALUE_CONTACTEBAYCS,self::VALUE_RESOLVEPPPICASE,self::VALUE_SETUPPAYOUTMETHOD,self::VALUE_UPDATEPAYOUTMETHOD,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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