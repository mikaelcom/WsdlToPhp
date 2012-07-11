<?php
/**
 * Class file for XiFuturesTypeGetLastIndustryHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetLastIndustryHeadlines
 * @date 08/07/2012
 */
class XiFuturesTypeGetLastIndustryHeadlines extends XiFuturesWsdlClass
{
	/**
	 * The SinceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SinceDate;
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
	 * @param string SinceDate
	 * @param XiFuturesTypeIndustryTypes Industry
	 * @return XiFuturesTypeGetLastIndustryHeadlines
	 */
	public function __construct($_SinceDate = null,$_Industry)
	{
		parent::__construct(array('SinceDate'=>$_SinceDate,'Industry'=>$_Industry));
	}
	/**
	 * Set SinceDate
	 * @param string SinceDate
	 * @return string
	 */
	public function setSinceDate($_SinceDate)
	{
		return ($this->SinceDate = $_SinceDate);
	}
	/**
	 * Get SinceDate
	 * @return string
	 */
	public function getSinceDate()
	{
		return $this->SinceDate;
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