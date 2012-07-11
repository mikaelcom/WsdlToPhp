<?php
/**
 * Class file for XiFuturesTypeGetTodaysIndustryHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTodaysIndustryHeadlines
 * @date 08/07/2012
 */
class XiFuturesTypeGetTodaysIndustryHeadlines extends XiFuturesWsdlClass
{
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeIndustryTypes
	 */
	public $Industry;
	/**
	 * Constructor
	 * @param XiFuturesTypeIndustryTypes Industry
	 * @return XiFuturesTypeGetTodaysIndustryHeadlines
	 */
	public function __construct($_Industry)
	{
		parent::__construct(array('Industry'=>$_Industry));
	}
	/**
	 * Set Industry
	 * @param IndustryTypes Industry
	 * @return IndustryTypes
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = XiFuturesTypeIndustryTypes::valueIsValid($_Industry)?$_Industry:null);
	}
	/**
	 * Get Industry
	 * @return XiFuturesTypeIndustryTypes
	 */
	public function getIndustry()
	{
		return $this->Industry;
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