<?php
/**
 * Class file for XiFuturesTypeGetTopIndustryHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTopIndustryHeadlines
 * @date 08/07/2012
 */
class XiFuturesTypeGetTopIndustryHeadlines extends XiFuturesWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
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
	 * @param int Count
	 * @param XiFuturesTypeIndustryTypes Industry
	 * @return XiFuturesTypeGetTopIndustryHeadlines
	 */
	public function __construct($_Count,$_Industry)
	{
		parent::__construct(array('Count'=>$_Count,'Industry'=>$_Industry));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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