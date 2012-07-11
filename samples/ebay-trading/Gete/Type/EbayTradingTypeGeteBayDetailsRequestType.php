<?php
/**
 * Class file for EbayTradingTypeGeteBayDetailsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGeteBayDetailsRequestType
 * Documentation : Retrieves eBay IDs and codes (e.g., site IDs and shipping service codes), enumerated data (e.g., payment methods), and other common eBay meta-data. This call enables you to keep certain data up to date in your applications without referring to the schema, the documentation, or the eBay online help. Other data is returned for your reference, but you may need to refer to the schema or the documentation for information about valid values and usage. <br><br> In some cases, the data returned in the response will vary according to the site that you use for the request. <br><br> If you use GeteBayDetails in preparation for listing in the US Motors Parts and Accessories categories, use site ID 0 (which is the site ID of the US site) when you call GeteBayDetails. <br><br> Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the recoupment terms before adding items to the site. This agreement allows eBay to reimburse a buyer during a dispute and then recoup the cost from the seller. Information about whether a site is a recoupment site is returned in the GeteBayDetailsResponse.RecoupmentPolicyDetails container.
 * @date 04/07/2012
 */
class EbayTradingTypeGeteBayDetailsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The DetailName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A designation of what kind of information you wish returned for the specified eBay site. If omitted, all details are returned. The possible values for input (the enumeration values of DetailNameCodeType) are the same name as fields returned by the response. See the documentation for the GeteBayDetails response to better understand the DetailName options.
	 * @var EbayTradingTypeDetailNameCodeType
	 */
	public $DetailName;
	/**
	 * Constructor
	 * @param EbayTradingTypeDetailNameCodeType DetailName
	 * @return EbayTradingTypeGeteBayDetailsRequestType
	 */
	public function __construct($_DetailName = null)
	{
		EbayTradingWsdlClass::__construct(array('DetailName'=>$_DetailName));
	}
	/**
	 * Set DetailName
	 * @param DetailNameCodeType DetailName
	 * @return DetailNameCodeType
	 */
	public function setDetailName($_DetailName)
	{
		return ($this->DetailName = EbayTradingTypeDetailNameCodeType::valueIsValid($_DetailName)?$_DetailName:null);
	}
	/**
	 * Get DetailName
	 * @return EbayTradingTypeDetailNameCodeType
	 */
	public function getDetailName()
	{
		return $this->DetailName;
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